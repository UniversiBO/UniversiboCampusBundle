<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Model;

/**
 * Represents a Document
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class Document extends AbstractItem
{
    /**
     * 2 char for language
     * @var string
     */
    private $language;

    /**
     * Files
     *
     * @var array
     */
    private $files = array();

    /**
     * Revision number (e.g. 1, 2 ...)
     * @var integer
     */
    private $revisionNumber;

    /**
     * Security level (e.g. studentsonly)
     *
     * @var string
     */
    private $security;

    /**
     * If security is list, the name of the list the document is restricted to
     *
     * @var string
     */
    private $distributionList;

    /**
     * Ordering position
     *
     * @var integer
     */
    private $position;

    /**
     * Language getter
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Language setter
     *
     * @param  string   $language
     * @return Document
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Files getter
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Files setter
     *
     * @param  array    $files
     * @return Document
     */
    public function setFiles(array $files)
    {
        $this->files = $files;

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
     * @param  integer  $revisionNumber
     * @return Document
     */
    public function setRevisionNumber($revisionNumber)
    {
        $this->revisionNumber = $revisionNumber;

        return $this;
    }

    /**
     * Security getter
     *
     * @return string
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Security setter
     *
     * @param  string   $security
     * @return Document
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Distribution list getter
     *
     * @return string
     */
    public function getDistributionList()
    {
        return $this->distributionList;
    }

    /**
     * Distribution list setter
     *
     * @param  string   $distributionList
     * @return Document
     */
    public function setDistributionList($distributionList)
    {
        $this->distributionList = $distributionList;

        return $this;
    }

    /**
     * Position getter
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Position setter
     *
     * @param  integer  $position
     * @return Document
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}
