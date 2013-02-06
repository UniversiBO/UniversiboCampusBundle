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
interface PersonInterface
{
    /**
     * Given name getter
     *
     * @return string
     */
    public function getGivenName();

    /**
     * Given name setter
     *
     * @param  string    $givenName
     * @return PersonInterface
     */
    public function setGivenName($givenName);

    /**
     * Family name getter
     *
     * @return string
     */
    public function getFamilyName();

    /**
     * Family name setter
     *
     * @param  string    $familyName
     * @return PersonInterface
     */
    public function setFamilyName($familyName);
}
