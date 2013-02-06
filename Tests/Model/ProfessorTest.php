<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\Model;

use Universibo\Bundle\CampusBundle\Model\Professor;
/**
 * Professor test suite
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class ProfessorTest extends AbstractItemTest
{
    /**
     *
     * @var Professor
     */
    private $professor;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->professor = new Professor();
    }

    /**
     * Gets the item
     *
     * @return Professor
     */
    protected function getItem()
    {
        return $this->professor;
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
            array('matriculationNumber', 12345)
        );
    }
}
