<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

use Universibo\Bundle\CampusBundle\Model\Creator;
/**
 * Creator test suite
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class CreatorTest extends AbstractModelTest
{
    /**
     *
     * @var Creator
     */
    private $creator;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->creator = new Creator();
    }

    /**
     * Gets the item
     *
     * @return Creator
     */
    protected function getModel()
    {
        return $this->creator;
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
            array('givenName', 'Hawking'),
            array('familyName', 'Stephen William'),
        );
    }
}
