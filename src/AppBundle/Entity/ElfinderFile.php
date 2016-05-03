<?php

namespace AppBundle\Entity;

/**
 * ElfinderFile
 */
class ElfinderFile
{
    /**
     * @var integer
     */
    private $parentId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var integer
     */
    private $mtime;

    /**
     * @var string
     */
    private $mime;

    /**
     * @var string
     */
    private $read;

    /**
     * @var string
     */
    private $write;

    /**
     * @var string
     */
    private $locked;

    /**
     * @var string
     */
    private $hidden;

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return ElfinderFile
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ElfinderFile
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return ElfinderFile
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return ElfinderFile
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set mtime
     *
     * @param integer $mtime
     *
     * @return ElfinderFile
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;

        return $this;
    }

    /**
     * Get mtime
     *
     * @return integer
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * Set mime
     *
     * @param string $mime
     *
     * @return ElfinderFile
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Set read
     *
     * @param string $read
     *
     * @return ElfinderFile
     */
    public function setRead($read)
    {
        $this->read = $read;

        return $this;
    }

    /**
     * Get read
     *
     * @return string
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Set write
     *
     * @param string $write
     *
     * @return ElfinderFile
     */
    public function setWrite($write)
    {
        $this->write = $write;

        return $this;
    }

    /**
     * Get write
     *
     * @return string
     */
    public function getWrite()
    {
        return $this->write;
    }

    /**
     * Set locked
     *
     * @param string $locked
     *
     * @return ElfinderFile
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return string
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set hidden
     *
     * @param string $hidden
     *
     * @return ElfinderFile
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return string
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return ElfinderFile
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return ElfinderFile
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

