<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhotosProfile
 */
class PhotosProfile
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $photos;


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
     * Set photos
     *
     * @param string $photos
     * @return PhotosProfile
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return string 
     */
    public function getPhotos()
    {
        return $this->photos;
    }
    /**
     * @var \EntityBundle\Entity\User
     */
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
