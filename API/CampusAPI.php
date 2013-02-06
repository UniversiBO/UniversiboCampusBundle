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
use Universibo\Bundle\CampusBundle\Model\File;

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

    /**
     * Creates a document
     *
     * @param  stdClass $documentRaw
     * @return Document
     */
    private function createDocument(stdClass $documentRaw)
    {
        $document = new Document();

        $document->setLanguage($documentRaw->language);
        $document->setSecurity($documentRaw->security);
        $document->setRevisionNumber($documentRaw->rev_number);
        $document->setPosition($documentRaw->pos);

        if ('list' === $document->getSecurity()) {
            $document->setDistributionList($documentRaw->distribution_list);
        }

        $files = array();

        foreach ($documentRaw->files as $fileRaw) {
            $files[]= $this->createFile($fileRaw);
        }

        $document->setFiles($files);

        return $document;
    }

    /**
     * Creates a file
     *
     * @param  stdClass $fileRaw
     * @return File
     */
    private function createFile(stdClass $fileRaw)
    {
        $file = new File();

        $file->setName($fileRaw->filename);
        $file->setUri($fileRaw->uri);
        $file->setSize($fileRaw->filesize);
        $file->setHashType($fileRaw->hash_type);
        $file->setHash($fileRaw->hash);
        $file->setMimeType($fileRaw->mime_type);
        $file->setModifiedAt(new DateTime($fileRaw->mtime));

        return $file;
    }
}
