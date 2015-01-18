<?php

namespace Asfour\ActionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 */
class Participant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Asfour\ActionBundle\Entity\Action
     */
    private $action;

    /**
     * @var \Asfour\ActionBundle\Entity\User
     */
    private $user;

    /**
     * @var \Asfour\ActionBundle\Entity\Team
     */
    private $team;


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
     * Set action
     *
     * @param \Asfour\ActionBundle\Entity\Action $action
     * @return Participant
     */
    public function setAction(\Asfour\ActionBundle\Entity\Action $action = null)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return \Asfour\ActionBundle\Entity\Action 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set user
     *
     * @param \Asfour\ActionBundle\Entity\User $user
     * @return Participant
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
     * Set team
     *
     * @param \Asfour\ActionBundle\Entity\Team $team
     * @return Participant
     */
    public function setTeam(\Asfour\ActionBundle\Entity\Team $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \Asfour\ActionBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }
    /**
     * @var string
     */
    private $participation;

    /**
     * @var string
     */
    private $role;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Set participation
     *
     * @param string $participation
     * @return Participant
     */
    public function setParticipation($participation)
    {
        $this->participation = $participation;

        return $this;
    }

    /**
     * Get participation
     *
     * @return string 
     */
    public function getParticipation()
    {
        return $this->participation;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Participant
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Participant
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
}
