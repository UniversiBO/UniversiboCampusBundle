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
}
