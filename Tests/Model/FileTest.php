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
    protected function getModel()
    {
        return $this->file;
    }

    /**
     * @dataProvider provider
     * @param string $name
     * @param mixed  $value
     */
    public function testAccessors($name, $value)
    {
        $this->accessorTest($name, $value);
    }

    public static function provider()
    {
        return array (
            array('name', 'goofy.doc'),
            array('size', 1024),
            array('hashType', 'MD5'),
            array('hash', '68b329da9893e34099c7d8ad5cb9c940'),
            array('mimeType', 'text/plain'),
            array('modifiedAt', new \DateTime()),
        );
    }
}
