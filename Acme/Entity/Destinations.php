<?php

namespace Acme\SearchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destinations
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Destinations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Acme\SearchBundle\Entity\User", inversedBy="destinations")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


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
     * @return Destinations
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
     * Set user
     *
     * @param \Acme\SearchBundle\Entity\User $user
     * @return Destinations
     */
    public function setUser(\Acme\SearchBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\SearchBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
