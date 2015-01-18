<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
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
    private $image;

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
     * @return Category
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
     * Set image
     *
     * @param string $image
     * @return Category
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
     * Add needs
     *
     * @param \Asfour\ActionBundle\Entity\Need $needs
     * @return Category
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
}
