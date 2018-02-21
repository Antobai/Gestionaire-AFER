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

    /**
     * Get the value of numero_telephone_fixe
     */ 
    public function getNumeroTelephoneFixe()
    {
        return $this->numero_telephone_fixe;
    }

    /**
     * Set the value of numero_telephone_fixe
     *
     * @return  self
     */ 
    public function setNumeroTelephoneFixe($numero_telephone_fixe)
    {
        $this->numero_telephone_fixe = $numero_telephone_fixe;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of code_postal
     */ 
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */ 
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of organisme
     */ 
    public function getOrganisme()
    {
        return $this->organisme;
    }

    /**
     * Set the value of organisme
     *
     * @return  self
     */ 
    public function setOrganisme($organisme)
    {
        $this->organisme = $organisme;

        return $this;
    }

    /**
     * Get the value of lieux
     */ 
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Set the value of lieux
     *
     * @return  self
     */ 
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}