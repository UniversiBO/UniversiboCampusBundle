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
class DocumentSet extends AbstractItem
{
    /**
     * DocumenSet title
     * @var string
     */
    private $title;

    /**
     * Revision number
     *
     * @var integer
     */
    private $revisionNumber;

    /**
     * Documents
     *
     * @var array
     */
    private $documents = array();

    /**
     * Title getter
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Title setter
     *
     * @param  string      $title
     * @return DocumentSet
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Revision number getter
     *
     * @return integer
     */
    public function getRevisionNumber()
    {
        return $this->revisionNumber;
    }

    /**
     * Revision number setter
     *
     * @param  integer     $revisionNumber
     * @return DocumentSet
     */
    public function setRevisionNumber($revisionNumber)
    {
        $this->revisionNumber = $revisionNumber;

        return $this;
    }

    /**
     * Documents getter
     *
     * @return array
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Documents setter
     * @param  array       $documents
     * @return DocumentSet
     */
    public function setDocuments(array $documents)
    {
        $this->documents = $documents;

        return $this;
    }
}
