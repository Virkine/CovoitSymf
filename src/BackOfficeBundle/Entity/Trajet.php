<?php

namespace BackOfficeBundle\Entity;

/**
 * Trajet
 */
class Trajet
{
    /**
     * @var float
     */
    private $nbKm;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BackOfficeBundle\Entity\Ville
     */
    private $villeDep;

    /**
     * @var \BackOfficeBundle\Entity\Ville
     */
    private $villeArr;

    /**
     * @var \BackOfficeBundle\Entity\Internaute
     */
    private $internaute;


    /**
     * Set nbKm
     *
     * @param float $nbKm
     *
     * @return Trajet
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm
     *
     * @return float
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Trajet
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
     * Set villeDep
     *
     * @param \BackOfficeBundle\Entity\Ville $villeDep
     *
     * @return Trajet
     */
    public function setVilleDep(\BackOfficeBundle\Entity\Ville $villeDep = null)
    {
        $this->villeDep = $villeDep;

        return $this;
    }

    /**
     * Get villeDep
     *
     * @return \BackOfficeBundle\Entity\Ville
     */
    public function getVilleDep()
    {
        return $this->villeDep;
    }

    /**
     * Set villeArr
     *
     * @param \BackOfficeBundle\Entity\Ville $villeArr
     *
     * @return Trajet
     */
    public function setVilleArr(\BackOfficeBundle\Entity\Ville $villeArr = null)
    {
        $this->villeArr = $villeArr;

        return $this;
    }

    /**
     * Get villeArr
     *
     * @return \BackOfficeBundle\Entity\Ville
     */
    public function getVilleArr()
    {
        return $this->villeArr;
    }

    /**
     * Set internaute
     *
     * @param \BackOfficeBundle\Entity\Internaute $internaute
     *
     * @return Trajet
     */
    public function setInternaute(\BackOfficeBundle\Entity\Internaute $internaute = null)
    {
        $this->internaute = $internaute;

        return $this;
    }

    /**
     * Get internaute
     *
     * @return \BackOfficeBundle\Entity\Internaute
     */
    public function getInternaute()
    {
        return $this->internaute;
    }
}
