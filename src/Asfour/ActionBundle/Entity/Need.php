<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Need
 */
class Need
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var boolean
     */
    private $is_filled;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $filled_at;

    /**
     * @var \Asfour\ActionBundle\Entity\User
     */
    private $user;

    /**
     * @var \Asfour\ActionBundle\Entity\Category
     */
    private $category;


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
     * Set name
     *
     * @param string $name
     * @return Need
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
     * Set date
     *
     * @param \DateTime $date
     * @return Need
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
     * Set is_filled
     *
     * @param boolean $isFilled
     * @return Need
     */
    public function setIsFilled($isFilled)
    {
        $this->is_filled = $isFilled;

        return $this;
    }

    /**
     * Get is_filled
     *
     * @return boolean 
     */
    public function getIsFilled()
    {
        return $this->is_filled;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Need
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set filled_at
     *
     * @param \DateTime $filledAt
     * @return Need
     */
    public function setFilledAt($filledAt)
    {
        $this->filled_at = $filledAt;

        return $this;
    }

    /**
     * Get filled_at
     *
     * @return \DateTime 
     */
    public function getFilledAt()
    {
        return $this->filled_at;
    }

    /**
     * Set user
     *
     * @param \Asfour\ActionBundle\Entity\User $user
     * @return Need
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
     * Set category
     *
     * @param \Asfour\ActionBundle\Entity\Category $category
     * @return Need
     */
    public function setCategory(\Asfour\ActionBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Asfour\ActionBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \Asfour\ActionBundle\Entity\Blessed
     */
    private $blessed;


    /**
     * Set blessed
     *
     * @param \Asfour\ActionBundle\Entity\Blessed $blessed
     * @return Need
     */
    public function setBlessed(\Asfour\ActionBundle\Entity\Blessed $blessed = null)
    {
        $this->blessed = $blessed;

        return $this;
    }

    /**
     * Get blessed
     *
     * @return \Asfour\ActionBundle\Entity\Blessed 
     */
    public function getBlessed()
    {
        return $this->blessed;
    }
}
