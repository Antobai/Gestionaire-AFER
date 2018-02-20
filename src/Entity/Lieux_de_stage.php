<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Lieux_de_stageRepository")
 */
class Lieux_de_stage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieux;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $organisme;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code_postal;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $ville;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_telephone_fixe;
    /**
     * @ORM\Column(type="decimal", precision=10 , scale=8, nullable=true)
     */
    private $latitude;
    /**
     * @ORM\Column(type="decimal", precision=10 , scale=8, nullable=true)
     */
    private $longitude;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $divers;
    
    /**
     * Get the value of latitude
     */ 
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set the value of latitude
     *
     * @return  self
     */ 
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get the value of longitude
     */ 
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set the value of longitude
     *
     * @return  self
     */ 
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get the value of divers
     */ 
    public function getDivers()
    {
        return $this->divers;
    }

    /**
     * Set the value of divers
     *
     * @return  self
     */ 
    public function setDivers($divers)
    {
        $this->divers = $divers;

        return $this;
    }

    public function __toString() {
        return $this->lieux;
    }
}