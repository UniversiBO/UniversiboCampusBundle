<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Model;

use DateTime;

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
     * Modified at date
     *
     * @var DateTime
     */
    private $modifiedAt;

    /**
     * Documents
     *
     * @var array
     */
    private $documents = array();

    /**
     * Creators
     *
     * @var array
     */
    private $creators = array();

    /**
     * Creators
     *
     * @var array
     */
    private $professors = array();

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
     * Modification date getter
     * @return DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * Modification date setter
     *
     * @param  DateTime    $modifiedAt
     * @return DocumentSet
     */
    public function setModifiedAt(DateTime $modifiedAt = null)
    {
        $this->modifiedAt = $modifiedAt;

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

    /**
     * Creators getter
     *
     * @return array
     */
    public function getCreators()
    {
        return $this->creators;
    }

    /**
     * Creators setter
     *
     * @param  array       $creators
     * @return DocumentSet
     */
    public function setCreators($creators)
    {
        $this->creators = $creators;

        return $this;
    }

    /**
     * Professors getter
     *
     * @return array
     */
    public function getProfessors()
    {
        return $this->professors;
    }

    /**
     * Professors setter
     *
     * @param  array       $professors
     * @return DocumentSet
     */
    public function setProfessors($professors)
    {
        $this->professors = $professors;

        return $this;
    }
}
