<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

/**
 * CampusAPI test suite
 */
class CampusAPITest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Universibo\Bundle\CampusBundle\Data\DataRetrieverInterface
     */
    private $retriever;

    /**
     * API
     *
     * @var \Universibo\Bundle\CampusBundle\API\CampusAPI
     */
    private $api;

    protected function setUp()
    {
        $this->retriever = $this
            ->getMock('\\Universibo\\Bundle\\CampusBundle\\Data\\DataRetrieverInterface')
        ;

        $this->api = new \Universibo\Bundle\CampusBundle\API\CampusAPI($this->retriever);
    }

    public function testArrayReturnsArray()
    {
        $this
            ->retriever
            ->expects($this->once())
            ->method('retrieveActivityData')
            ->with($this->equalTo(2012), $this->equalTo(341470))
            ->will($this->returnValue(array()))
        ;

        $this->assertEquals(array(), $this->api->getActivityData(2012, 341470));
    }

    public function testDocumentSetFields()
    {
        $this->prepareFullResult('sample01.json', $academicYear = 2012, $componentId=341470);

        $result = $this->api->getActivityData($academicYear, $componentId);

        $this->assertCount(1, $result);

        list($item) = $result;

        $this->assertInstanceOf('\\Universibo\\Bundle\\CampusBundle\\Model\\DocumentSet', $item);

        $this->assertEquals('http://campus.unibo.it/id/eprint/86958', $item->getUri());
        $this->assertEquals('Testimonianza Iconsulting', $item->getTitle());
        $this->assertEquals(13, $item->getRevisionNumber());
        $this->assertEquals(new \DateTime('2012-12-13 13:06:49'), $item->getModifiedAt());
    }

    public function testDocuments()
    {
        $this->prepareFullResult('sample01.json', $academicYear = 2012, $componentId=341470);
        $result = $this->api->getActivityData($academicYear, $componentId);
        list($documentSet) = $result;

        $documents = $documentSet->getDocuments();
        $this->assertCount(1, $documents);

        list($document) = $documents;

        $this->assertEquals('it', $document->getLanguage());
        $this->assertSame(2, $document->getRevisionNumber());
        $this->assertEquals('list', $document->getSecurity());
        $this->assertSame(1, $document->getPosition());
    }

    private function prepareFullResult($filename, $academicYear, $componentId)
    {
        $file = __DIR__ . '/../Resources/data/'.$filename;
        $data = json_decode(file_get_contents($file));

        $this
            ->retriever
            ->expects($this->once())
            ->method('retrieveActivityData')
            ->with($this->equalTo($academicYear), $this->equalTo($componentId))
            ->will($this->returnValue($data))
        ;
    }
}
