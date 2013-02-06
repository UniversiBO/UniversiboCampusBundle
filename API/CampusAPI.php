<?php
/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */

namespace Universibo\Bundle\CampusBundle\API;

use DateTime;
use stdClass;
use Universibo\Bundle\CampusBundle\Data\DataRetrieverInterface;
use Universibo\Bundle\CampusBundle\Model\Document;
use Universibo\Bundle\CampusBundle\Model\DocumentSet;

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
            $documentSet = new DocumentSet();

            $documentSet->setUri($documentSetRaw->uri);
            $documentSet->setTitle($documentSetRaw->title);
            $documentSet->setRevisionNumber($documentSetRaw->rev_number);
            $documentSet->setModifiedAt(new DateTime($documentSetRaw->lastmod));

            $documents = array();

            foreach ($documentSetRaw->documents as $documentRaw) {
                $documents[] = $this->createDocument($documentRaw);
            }

            $documentSet->setDocuments($documents);
            $documentSets[] = $documentSet;
        }

        return $documentSets;
    }

    private function createDocument(stdClass $documentRaw)
    {
        $document = new Document();

        $document->setLanguage($documentRaw->language);
        $document->setSecurity($documentRaw->security);
        $document->setRevisionNumber($documentRaw->rev_number);
        $document->setPosition($documentRaw->pos);

        return $document;
    }
}
