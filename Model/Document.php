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
