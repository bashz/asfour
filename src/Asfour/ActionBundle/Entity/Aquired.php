<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aquired
 */
class Aquired
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var boolean
     */
    private $is_new;

    /**
     * @var \Asfour\ActionBundle\Entity\User
     */
    private $user;

    /**
     * @var \Asfour\ActionBundle\Entity\Achivement
     */
    private $achivement;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Aquired
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
     * Set is_new
     *
     * @param boolean $isNew
     * @return Aquired
     */
    public function setIsNew($isNew)
    {
        $this->is_new = $isNew;

        return $this;
    }

    /**
     * Get is_new
     *
     * @return boolean 
     */
    public function getIsNew()
    {
        return $this->is_new;
    }

    /**
     * Set user
     *
     * @param \Asfour\ActionBundle\Entity\User $user
     * @return Aquired
     */
    public function setUser(\Asfour\ActionBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Asfour\ActionBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set achivement
     *
     * @param \Asfour\ActionBundle\Entity\Achivement $achivement
     * @return Aquired
     */
    public function setAchivement(\Asfour\ActionBundle\Entity\Achivement $achivement = null)
    {
        $this->achivement = $achivement;

        return $this;
    }

    /**
     * Get achivement
     *
     * @return \Asfour\ActionBundle\Entity\Achivement 
     */
    public function getAchivement()
    {
        return $this->achivement;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add actions
     *
     * @param \Asfour\ActionBundle\Entity\Action $actions
     * @return Aquired
     */
    public function addAction(\Asfour\ActionBundle\Entity\Action $actions)
    {
        $this->actions[] = $actions;

        return $this;
    }

    /**
     * Remove actions
     *
     * @param \Asfour\ActionBundle\Entity\Action $actions
     */
    public function removeAction(\Asfour\ActionBundle\Entity\Action $actions)
    {
        $this->actions->removeElement($actions);
    }

    /**
     * Get actions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActions()
    {
        return $this->actions;
    }
}
