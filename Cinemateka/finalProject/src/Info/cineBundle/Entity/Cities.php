<?php

namespace Info\cineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cities
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cities
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
     * @ORM\Column(name="cine", type="array")
     */
    private $cine;


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
     * @return Cities
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
     * Set cine
     *
     * @param array $cine
     * @return Cities
     */
    public function setCine($cine)
    {
        $this->cine = $cine;

        return $this;
    }

    /**
     * Get cine
     *
     * @return array 
     */
    public function getCine()
    {
        return $this->cine;
    }
}
