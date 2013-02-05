<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

use Universibo\Bundle\CampusBundle\Model\AbstractItem;

/**
 * Abstract test suite
 */
abstract class AbstractItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return AbstractItem
     */
    abstract protected function getItem();

    public function testUriAccessors()
    {
        $this->accessorTest('uri', 'http://www.google.it/');
    }

    protected function accessorTest($name, $value)
    {
        $item = $this->getItem();
        $setter = 'set'.$name;
        $getter = 'get'.$name;

        $this->assertSame($item, $item->$setter($value));
        $this->assertEquals($value, $item->$getter());
    }
}
