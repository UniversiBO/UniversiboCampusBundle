<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

/**
 * Abstract test suite
 */
abstract class AbstractItemTest extends AbstractModelTest
{
    public function testUriAccessors()
    {
        $this->accessorTest('uri', 'http://www.google.it/');
    }
}
