<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 */
class Blessed
{

    /**
     * @var \DateTime
     */
    private $last_seen_on;

    /**
     * @var string
     */
    private $last_seen_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $needs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->needs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set last_seen_on
     *
     * @param \DateTime $lastSeenOn
     * @return Blessed
     */
    public function setLastSeenOn($lastSeenOn)
    {
        $this->last_seen_on = $lastSeenOn;

        return $this;
    }

    /**
     * Get last_seen_on
     *
     * @return \DateTime 
     */
    public function getLastSeenOn()
    {
        return $this->last_seen_on;
    }

    /**
     * Set last_seen_at
     *
     * @param string $lastSeenAt
     * @return Blessed
     */
    public function setLastSeenAt($lastSeenAt)
    {
        $this->last_seen_at = $lastSeenAt;

        return $this;
    }

    /**
     * Get last_seen_at
     *
     * @return string 
     */
    public function getLastSeenAt()
    {
        return $this->last_seen_at;
    }

    /**
     * Add needs
     *
     * @param \Asfour\ActionBundle\Entity\Need $needs
     * @return Blessed
     */
    public function addNeed(\Asfour\ActionBundle\Entity\Need $needs)
    {
        $this->needs[] = $needs;

        return $this;
    }

    /**
     * Remove needs
     *
     * @param \Asfour\ActionBundle\Entity\Need $needs
     */
    public function removeNeed(\Asfour\ActionBundle\Entity\Need $needs)
    {
        $this->needs->removeElement($needs);
    }

    /**
     * Get needs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNeeds()
    {
        return $this->needs;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var float
     */
    private $last_seen_lat;

    /**
     * @var float
     */
    private $last_seen_lon;


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
     * @return Blessed
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
     * Set age
     *
     * @param integer $age
     * @return Blessed
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Blessed
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Blessed
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return Blessed
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set last_seen_lat
     *
     * @param float $lastSeenLat
     * @return Blessed
     */
    public function setLastSeenLat($lastSeenLat)
    {
        $this->last_seen_lat = $lastSeenLat;

        return $this;
    }

    /**
     * Get last_seen_lat
     *
     * @return float 
     */
    public function getLastSeenLat()
    {
        return $this->last_seen_lat;
    }

    /**
     * Set last_seen_lon
     *
     * @param float $lastSeenLon
     * @return Blessed
     */
    public function setLastSeenLon($lastSeenLon)
    {
        $this->last_seen_lon = $lastSeenLon;

        return $this;
    }

    /**
     * Get last_seen_lon
     *
     * @return float 
     */
    public function getLastSeenLon()
    {
        return $this->last_seen_lon;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actions;


    /**
     * Add actions
     *
     * @param \Asfour\ActionBundle\Entity\Action $actions
     * @return Blessed
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
