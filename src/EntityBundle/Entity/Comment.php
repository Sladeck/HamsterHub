<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 */
class Comment
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \SG\siteBaseBundle\Entity\Thread
     */
    private $thread;


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
     * Set thread
     *
     * @param \SG\siteBaseBundle\Entity\Thread $thread
     * @return Comment
     */
    public function setThread(\SG\siteBaseBundle\Entity\Thread $thread = null)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * Get thread
     *
     * @return \SG\siteBaseBundle\Entity\Thread 
     */
    public function getThread()
    {
        return $this->thread;
    }
}
