<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 */
class Action
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $preambule;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $facts;

    /**
     * @var boolean
     */
    private $is_active;

    /**
     * @var string
     */
    private $place;

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
    private $participants;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->participants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set locale
     *
     * @param string $locale
     * @return Action
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string 
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Action
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Action
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
     * Set slug
     *
     * @param string $slug
     * @return Action
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set preambule
     *
     * @param string $preambule
     * @return Action
     */
    public function setPreambule($preambule)
    {
        $this->preambule = $preambule;

        return $this;
    }

    /**
     * Get preambule
     *
     * @return string 
     */
    public function getPreambule()
    {
        return $this->preambule;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Action
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set facts
     *
     * @param string $facts
     * @return Action
     */
    public function setFacts($facts)
    {
        $this->facts = $facts;

        return $this;
    }

    /**
     * Get facts
     *
     * @return string 
     */
    public function getFacts()
    {
        return $this->facts;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     * @return Action
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Action
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Action
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
     * @return Action
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
     * Add participants
     *
     * @param \Asfour\ActionBundle\Entity\Participant $participants
     * @return Action
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
     * Add images
     *
     * @param \Asfour\ActionBundle\Entity\Image $images
     * @return Action
     */
    public function addImage(\Asfour\ActionBundle\Entity\Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Asfour\ActionBundle\Entity\Image $images
     */
    public function removeImage(\Asfour\ActionBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $aquireds;


    /**
     * Add aquireds
     *
     * @param \Asfour\ActionBundle\Entity\Aquired $aquireds
     * @return Action
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $blesseds;


    /**
     * Add blesseds
     *
     * @param \Asfour\ActionBundle\Entity\Blessed $blesseds
     * @return Action
     */
    public function addBlessed(\Asfour\ActionBundle\Entity\Blessed $blesseds)
    {
        $this->blesseds[] = $blesseds;

        return $this;
    }

    /**
     * Remove blesseds
     *
     * @param \Asfour\ActionBundle\Entity\Blessed $blesseds
     */
    public function removeBlessed(\Asfour\ActionBundle\Entity\Blessed $blesseds)
    {
        $this->blesseds->removeElement($blesseds);
    }

    /**
     * Get blesseds
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBlesseds()
    {
        return $this->blesseds;
    }
}
