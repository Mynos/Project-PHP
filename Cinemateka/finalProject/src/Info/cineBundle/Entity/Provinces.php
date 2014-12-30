<?php

namespace Info\cineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provinces
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Provinces
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="Cities", type="array")
     */
    private $cities;


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
     * @return Provinces
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
     * Set cities
     *
     * @param array $cities
     * @return Provinces
     */
    public function setCities($cities)
    {
        $this->cities = $cities;

        return $this;
    }

    /**
     * Get cities
     *
     * @return array 
     */
    public function getCities()
    {
        return $this->cities;
    }
}
