<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 */
class Badge extends Achivement
{

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $thumbnail;


    /**
     * Set image
     *
     * @param string $image
     * @return Badge
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
     * @return Badge
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
}
