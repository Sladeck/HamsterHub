<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Videos
 */
class Videos
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var \DateTime
     */
    private $date;

    /**
    * @var string
    */
    private $name;

    /**
     * @var string
     */
    private $thumbnail;

    /**
     * @var string
     */
    private $description;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set videos
     *
     * @param string $videos
     * @return Videos
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get videos
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Videos
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Videos
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
     * Set thumbnail
     *
     * @param string $thumbnail
     * @return Videos
     */
    public function setDescription($description)
    {
        $this->description= $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     * @return Videos
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }



    /**
     * @var \EntityBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \EntityBundle\Entity\User $user
     * @return Videos
     */
    public function setUser(\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EntityBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
