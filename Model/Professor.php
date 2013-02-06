<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Model;

/**
 * Represents a Document set
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class Professor extends AbstractItem
{
    /**
     * Given name
     * @var string
     */
    private $givenName;

    /**
     * Family name
     * @var string
     */
    private $familyName;

    /**
     * Matriculation number
     * @var string
     */
    private $matriculationNumber;

    /**
     * Given name getter
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Given name setter
     *
     * @param  string    $givenName
     * @return Professor
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Family name getter
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Family name setter
     *
     * @param  string    $familyName
     * @return Professor
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * Matriculation number getter
     *
     * @return string
     */
    public function getMatriculationNumber()
    {
        return $this->matriculationNumber;
    }

    /**
     * Matriculation number setter
     *
     * @param  string    $matriculationNumber
     * @return Professor
     */
    public function setMatriculationNumber($matriculationNumber)
    {
        $this->matriculationNumber = $matriculationNumber;

        return $this;
    }
}
