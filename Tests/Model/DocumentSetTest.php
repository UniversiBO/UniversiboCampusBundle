<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

use Universibo\Bundle\CampusBundle\Model\DocumentSet;
/**
 * DocumentSet test suite
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class DocumentSetTest extends AbstractItemTest
{
    /**
     *
     * @var DocumentSet
     */
    private $documentSet;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->documentSet = new DocumentSet();
    }

    /**
     * Gets the item
     *
     * @return DocumentSet
     */
    protected function getItem()
    {
        return $this->documentSet;
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
            array('title', 'Hello World!'),
            array('revisionNumber', 3),
            array('documents', array())
        );
    }
}
