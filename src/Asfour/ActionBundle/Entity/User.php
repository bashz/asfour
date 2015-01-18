<?php

namespace Asfour\ActionBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"blessed" = "Blessed", "contributor" = "Contributor", "user" = "User"})
 */
class User extends BaseUser
{
    
    /**
     * @var integer
     */
    protected $id;

    
    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $score;

    /**
     * @var boolean
     */
    private $is_blessed;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $needs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->needs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actions = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set image
     *
     * @param string $image
     * @return User
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
     * Set score
     *
     * @param integer $score
     * @return User
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set is_blessed
     *
     * @param boolean $isBlessed
     * @return User
     */
    public function setIsBlessed($isBlessed)
    {
        $this->is_blessed = $isBlessed;

        return $this;
    }

    /**
     * Get is_blessed
     *
     * @return boolean 
     */
    public function getIsBlessed()
    {
        return $this->is_blessed;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
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
     * @return User
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
     * Add needs
     *
     * @param \Asfour\ActionBundle\Entity\Need $needs
     * @return User
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
     * Add actions
     *
     * @param \Asfour\ActionBundle\Entity\Action $actions
     * @return User
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participants;


    /**
     * Add participants
     *
     * @param \Asfour\ActionBundle\Entity\Participant $participants
     * @return User
     */
    public function addParticipant(\Asfour\ActionBundle\Entity\Participant $participants)
    {
        $this->participants[] = $participants;

        return $this;
    }

    /**
     * Remove participants
     *
     * @param \Asfour\ActionBundle\Entity\Participant $participants
     */
    public function removeParticipant(\Asfour\ActionBundle\Entity\Participant $participants)
    {
        $this->participants->removeElement($participants);
    }

    /**
     * Get participants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $achivements;


    /**
     * Add achivements
     *
     * @param \Asfour\ActionBundle\Entity\Achievement $achivements
     * @return User
     */
    public function addAchivement(\Asfour\ActionBundle\Entity\Achievement $achivements)
    {
        $this->achivements[] = $achivements;

        return $this;
    }

    /**
     * Remove achivements
     *
     * @param \Asfour\ActionBundle\Entity\Achievement $achivements
     */
    public function removeAchivement(\Asfour\ActionBundle\Entity\Achievement $achivements)
    {
        $this->achivements->removeElement($achivements);
    }

    /**
     * Get achivements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAchivements()
    {
        return $this->achivements;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $aquireds;


    /**
     * Add aquireds
     *
     * @param \Asfour\ActionBundle\Entity\Aquired $aquireds
     * @return User
     */
    public function addAquired(\Asfour\ActionBundle\Entity\Aquired $aquireds)
    {
        $this->aquireds[] = $aquireds;

        return $this;
    }

    /**
     * Remove aquireds
     *
     * @param \Asfour\ActionBundle\Entity\Aquired $aquireds
     */
    public function removeAquired(\Asfour\ActionBundle\Entity\Aquired $aquireds)
    {
        $this->aquireds->removeElement($aquireds);
    }

    /**
     * Get aquireds
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAquireds()
    {
        return $this->aquireds;
    }
}
