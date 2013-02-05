<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Model;

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
     * @var \DateTime
     */
    private $modifiedAt;
}
