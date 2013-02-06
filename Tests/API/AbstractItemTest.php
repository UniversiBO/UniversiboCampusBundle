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
}
