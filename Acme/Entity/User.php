<?php

namespace Acme\SearchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     *  @ORM\OneToOne(targetEntity="Acme\SearchBundle\Entity\Locations", mappedBy="user")
     */
    private $locations;

    /**
     * @ORM\OneToMany(targetEntity="Acme\SearchBundle\Entity\Destinations", mappedBy="user", cascade={"persist", "remove"})
     */
    private $destinations;

    /**
     * @ORM\ManyToMany(targetEntity="Acme\SearchBundle\Entity\Cars", mappedBy="users")
     */
    private $cars;
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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set locations
     *
     * @param \Acme\SearchBundle\Entity\Locations $locations
     * @return User
     */
    public function setLocations(\Acme\SearchBundle\Entity\Locations $locations = null)
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * Get locations
     *
     * @return \Acme\SearchBundle\Entity\Locations 
     */
    public function getLocations()
    {
        return $this->locations;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->destinations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add destinations
     *
     * @param \Acme\SearchBundle\Entity\Destinations $destinations
     * @return User
     */
    public function addDestination(\Acme\SearchBundle\Entity\Destinations $destinations)
    {
        $this->destinations[] = $destinations;

        return $this;
    }

    /**
     * Remove destinations
     *
     * @param \Acme\SearchBundle\Entity\Destinations $destinations
     */
    public function removeDestination(\Acme\SearchBundle\Entity\Destinations $destinations)
    {
        $this->destinations->removeElement($destinations);
    }

    /**
     * Get destinations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Add cars
     *
     * @param \Acme\SearchBundle\Entity\Cars $cars
     * @return User
     */
    public function addCar(\Acme\SearchBundle\Entity\Cars $cars)
    {
        $this->cars[] = $cars;

        return $this;
    }

    /**
     * Remove cars
     *
     * @param \Acme\SearchBundle\Entity\Cars $cars
     */
    public function removeCar(\Acme\SearchBundle\Entity\Cars $cars)
    {
        $this->cars->removeElement($cars);
    }

    /**
     * Get cars
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCars()
    {
        return $this->cars;
    }
}
