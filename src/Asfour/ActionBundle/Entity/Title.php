<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Title
 */
class Title extends Achivement
{

    /**
     * @var integer
     */
    private $score;


    /**
     * Set score
     *
     * @param integer $score
     * @return Title
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
}
