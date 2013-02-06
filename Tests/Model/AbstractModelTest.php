<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

/**
 * Abstract test suite
 */
abstract class AbstractModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return object
     */
    abstract protected function getModel();

    protected function accessorTest($name, $value)
    {
        $item = $this->getModel();
        $setter = 'set'.$name;
        $getter = 'get'.$name;

        $this->assertSame($item, $item->$setter($value));
        $this->assertEquals($value, $item->$getter());
    }
}
