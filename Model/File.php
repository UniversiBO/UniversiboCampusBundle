<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Model;

use DateTime;

/**
 * Represents a File
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class File extends AbstractItem
{
    /**
     * File name, (e.g. goofy.doc)
     * @var string
     */
    private $name;

    /**
     * File size
     *
     * @var integer
     */
    private $size;

    /**
     * Checksum algorithm (e.g. MD5)
     *
     * @var string
     */
    private $hashType;

    /**
     * Checksum
     *
     * @var string
     */
    private $hash;

    /**
     * MIME Type
     *
     * @var string
     */
    private $mimeType;

    /**
     * Modified at date
     *
     * @var DateTime
     */
    private $modifiedAt;

    /**
     * Name getter
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * File setter
     *
     * @param  string $name
     * @return File
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Size getter
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Size setter
     *
     * @param  integer $size
     * @return File
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Hash type getter
     *
     * @return string
     */
    public function getHashType()
    {
        return $this->hashType;
    }

    /**
     * Hash type setter
     *
     * @param  string $hashType
     * @return File
     */
    public function setHashType($hashType)
    {
        $this->hashType = $hashType;

        return $this;
    }

    /**
     * Hash getter
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Hash setter
     *
     * @param  string $hash
     * @return File
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * MIME Type getter
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * MIME Type setter
     *
     * @param  string $mimeType
     * @return File
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;

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
     * @param  DateTime $modifiedAt
     * @return File
     */
    public function setModifiedAt(DateTime $modifiedAt = null)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }
}
