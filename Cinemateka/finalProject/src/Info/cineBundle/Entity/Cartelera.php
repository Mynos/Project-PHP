<?php

namespace Info\cineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartelera
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cartelera
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateIni", type="date")
     */
    private $dateIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="date")
     */
    private $dateEnd;

    /**
     * @var array
     *
     * @ORM\Column(name="functions", type="array")
     */
    private $functions;


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
     * Set dateIni
     *
     * @param \DateTime $dateIni
     * @return Cartelera
     */
    public function setDateIni($dateIni)
    {
        $this->dateIni = $dateIni;

        return $this;
    }

    /**
     * Get dateIni
     *
     * @return \DateTime 
     */
    public function getDateIni()
    {
        return $this->dateIni;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Cartelera
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set functions
     *
     * @param array $functions
     * @return Cartelera
     */
    public function setFunctions($functions)
    {
        $this->functions = $functions;

        return $this;
    }

    /**
     * Get functions
     *
     * @return array 
     */
    public function getFunctions()
    {
        return $this->functions;
    }
}
