<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"badge" = "Badge", "title" = "Title"})
 */
class Achivement
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
     * @var string
     */
    private $conditions;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $is_active;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $thumbnail;

    /**
     * @var integer
     */
    private $score;


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
     * @return Achivement
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
     * Set conditions
     *
     * @param string $conditions
     * @return Achivement
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string 
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Achivement
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Set is_active
     *
     * @param boolean $isActive
     * @return Achivement
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
     * Set image
     *
     * @param string $image
     * @return Achivement
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
     * Set thumbnail
     *
     * @param string $thumbnail
     * @return Achivement
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
     * Set score
     *
     * @param integer $score
     * @return Achivement
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add users
     *
     * @param \Asfour\ActionBundle\Entity\User $users
     * @return Achivement
     */
    public function addUser(\Asfour\ActionBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Asfour\ActionBundle\Entity\User $users
     */
    public function removeUser(\Asfour\ActionBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $aquireds;


    /**
     * Add aquireds
     *
     * @param \Asfour\ActionBundle\Entity\Aquired $aquireds
     * @return Achivement
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
