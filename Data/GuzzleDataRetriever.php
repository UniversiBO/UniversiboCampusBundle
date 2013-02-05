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
     * Retrieves activity data
     *
     * @param integer $academicYear
     * @param integer $componentId
     * @return array
     */
    public function retrieveActivityData($academicYear, $componentId)
    {
        $request = $this
            ->client
            ->get('lista')
        ;

        $request
            ->getQuery()
            ->set('annoAccademico', $academicYear)
            ->set('idComponenteAF', $componentId)
            ->set('output', 'JSON')
        ;

        return $request
            ->send()
            ->json()
        ;
    }
}
