<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Data;

/**
 * This is interface has been created to decouple data retrieval
 * from transformation process, allowing mock testing
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
interface DataRetrieverInterface
{
    /**
     * Gets activity data
     *
     * @param  integer  $academicYear
     * @param  integer  $componentId
     * @return stdClass
     */
    public function retrieveActivityData($academicYear, $componentId);
}
