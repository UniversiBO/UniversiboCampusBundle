<?php
/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */

namespace Universibo\Bundle\CampusBundle\API;

use Universibo\Bundle\CampusBundle\Data\DataRetrieverInterface;

/**
 * AMS Campus API Façade
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class CampusAPI
{
    /**
     * retriever
     *
     * @var DataRetrieverInterface $retriever
     */
    private $retriever;

    /**
     * Class constructor
     *
     * @param DataRetrieverInterface $retriever
     */
    public function __construct(DataRetrieverInterface $retriever)
    {
        $this->retriever = $retriever;
    }

    /**
     * Gets Activity Data
     *
     * @param  integer $academicYear
     * @param  integer $componentId
     * @return array
     */
    public function getActivityData($academicYear, $componentId)
    {
        $data = $this->retriever->retrieveActivityData($academicYear, $componentId);

        $documentSets = array();

        foreach ($data as $documentSetRaw) {

        }

        return $documentSets;
    }
}
