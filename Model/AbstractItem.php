<?php

/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Model;

/**
 * Abstract model class
 *
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
abstract class AbstractItem
{
    /**
     * Item URI
     *
     * @var string
     */
    private $uri;

    /**
     * Uri getter
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Uri setter
     *
     * @param  string       $uri
     * @return AbstractItem fluent interface
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }
}
