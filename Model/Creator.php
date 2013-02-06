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
class Creator implements PersonInterface
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
     * @return Creator
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
     * @return Creator
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;

        return $this;
    }
}
