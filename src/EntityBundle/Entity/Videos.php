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
    private $videos;

    /**
     * @var \DateTime
     */
    private $date;


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
    public function setVideos($videos)
    {
        $this->videos = $videos;

        return $this;
    }

    /**
     * Get videos
     *
     * @return string
     */
    public function getVideos()
    {
        return $this->videos;
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

    private $user;


    /**
     * Set user
     *
     * @param \EntityBundle\Entity\User $user
     * @return PhotosProfile
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
