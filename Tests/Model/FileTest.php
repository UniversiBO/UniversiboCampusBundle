<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

use Universibo\Bundle\CampusBundle\Model\File;
/**
 * File test suite
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class FileTest extends AbstractItemTest
{
    /**
     *
     * @var File
     */
    private $file;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->file = new File();
    }

    /**
     * Gets the item
     *
     * @return File
     */
    protected function getItem()
    {
        return $this->file;
    }
}
