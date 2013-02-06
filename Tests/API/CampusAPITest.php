<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

use DateTime;
use Universibo\Bundle\CampusBundle\API\CampusAPI;
use Universibo\Bundle\CampusBundle\Data\DataRetrieverInterface;

/**
 * CampusAPI test suite
 */
class CampusAPITest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DataRetrieverInterface
     */
    private $retriever;

    /**
     * API
     *
     * @var CampusAPI
     */
    private $api;

    protected function setUp()
    {
        $this->retriever = $this
            ->getMock('\\Universibo\\Bundle\\CampusBundle\\Data\\DataRetrieverInterface')
        ;

        $this->api = new CampusAPI($this->retriever);
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
        $item = $this->getFirstResult();

        $this->assertInstanceOf('\\Universibo\\Bundle\\CampusBundle\\Model\\DocumentSet', $item);

        $this->assertEquals('http://campus.unibo.it/id/eprint/86958', $item->getUri());
        $this->assertEquals('Testimonianza Iconsulting', $item->getTitle());
        $this->assertEquals(13, $item->getRevisionNumber());
        $this->assertEquals(new DateTime('2012-12-13 13:06:49'), $item->getModifiedAt());
    }

    public function testDocuments()
    {
        $documentSet = $this->getFirstResult();

        $documents = $documentSet->getDocuments();
        $this->assertCount(1, $documents);

        list($document) = $documents;

        $this->assertEquals('it', $document->getLanguage());
        $this->assertSame(2, $document->getRevisionNumber());
        $this->assertEquals('list', $document->getSecurity());
        $this->assertSame(1, $document->getPosition());
        $this->assertEquals('claudio.sartori.Processi_E_Tecniche_DI_Data_Mining', $document->getDistributionList());
    }

    public function testCreators()
    {
        $documentSet = $this->getFirstResult();
        $creators = $documentSet->getCreators();

        $this->assertCount(1, $creators);
        list($creator) = $creators;

        $this->assertEquals('Simone', $creator->getGivenName());
        $this->assertEquals('Vannicola', $creator->getFamilyName());
    }

    public function testProfessors()
    {
        $documentSet = $this->getFirstResult();
        $professors = $documentSet->getProfessors();

        $this->assertCount(1, $professors);
        list($professor) = $professors;

        $this->assertSame('030315', $professor->getMatriculationNumber());
        $this->assertEquals('Claudio', $professor->getGivenName());
        $this->assertEquals('Sartori', $professor->getFamilyName());
    }

    public function testFileFields()
    {
        $documentSet = $this->getFirstResult();
        list($document) = $documentSet->getDocuments();
        $files = $document->getFiles();

        $this->assertEquals('array', gettype($files), 'gettype($files) must be array');
        $this->assertCount(1, $files);

        list($file) = $files;
        $this->assertInstanceOf('\\Universibo\\Bundle\\CampusBundle\\Model\\File', $file);

        $this->assertSame('DataMining_Iconsulting.ppt', $file->getName(), 'File name must match');
        $this->assertSame('http://campus.unibo.it/id/file/932182', $file->getUri());
        $this->assertSame(4398080, $file->getSize(), 'File size must match');
        $this->assertSame('MD5', $file->getHashType());
        $this->assertSame('ffeed688a3236f28995ed3e982a2bf8a', $file->getHash());
        $this->assertSame('application/vnd.ms-office', $file->getMimeType());
        $this->assertEquals(new DateTime('2012-12-13 13:06:28'), $file->getModifiedAt());
    }

    /**
     * Returns the first result from sample file
     *
     * @return DocumentSet
     */
    private function getFirstResult()
    {
        $this->prepareFullResult('sample01.json', $academicYear = 2012, $componentId=341470);

        $result = $this->api->getActivityData($academicYear, $componentId);
        $this->assertCount(1, $result);

        return $result[0];
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
