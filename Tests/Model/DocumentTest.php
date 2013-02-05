<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

use Universibo\Bundle\CampusBundle\Model\Document;
/**
 * Document test suite
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class DocumentTest extends AbstractItemTest
{
    /**
     *
     * @var Document
     */
    private $document;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->document = new Document();
    }

    /**
     * Gets the item
     *
     * @return Document
     */
    protected function getItem()
    {
        return $this->document;
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
            array('language', 'it'),
            array('revisionNumber', 3),
            array('security', 'studentsonly'),
            array('position', 2)
        );
    }
}
