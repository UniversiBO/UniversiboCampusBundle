<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Data;

use Guzzle\Http\Client;

/**
 * Guzzle based data retriever
 * 
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class GuzzleDataRetriever implements DataRetrieverInterface
{
    /**
     * Guzzle Client
     * @var Client 
     */
    private $client;
    
    /**
     * Class constructor
     * 
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Retriever
     * 
     * @param integer $academicYear
     * @param integer $componentId
     */
    public function retrieveActivityData($academicYear, $componentId) 
    {
        $this
            ->client
            ->get('lista', null, array (
                'idComponenteAF'  => $academicYear,
                'idComponenteAF' => $componentId,
                'output'         => 'JSON'
            ))
        ;
    }
}
