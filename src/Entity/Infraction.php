<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InfractionRepository")
 */
class Infraction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id;
    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heure;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieu;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_infraction;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_tribunal;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $cs_permis;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $cs_assurance;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Stagiaire", mappedBy="infractions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tribunal", mappedBy="infractions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $tribunaux;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type_infraction", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $types_infractions;
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

    /**
     * Get the value of heure
     */ 
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set the value of heure
     *
     * @return  self
     */ 
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get the value of lieu
     */ 
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set the value of lieu
     *
     * @return  self
     */ 
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get the value of date_infraction
     */ 
    public function getDateinfraction()
    {
        return $this->date_infraction;
    }

    /**
     * Set the value of date_infraction
     *
     * @return  self
     */ 
    public function setDateinfraction($date_infraction)
    {
        $this->date_infraction = $date_infraction;

        return $this;
    }

    /**
     * Get the value of date_tribunal
     */ 
    public function getDatetribunal()
    {
        return $this->date_tribunal;
    }

    /**
     * Set the value of date_tribunal
     *
     * @return  self
     */ 
    public function setDatetribunal($date_tribunal)
    {
        $this->date_tribunal = $date_tribunal;

        return $this;
    }


    /**
     * Get the value of cs_permis
     */ 
    public function getCspermis()
    {
        return $this->cs_permis;
    }

    /**
     * Set the value of cs_permis
     *
     * @return  self
     */ 
    public function setCspermis($cs_permis)
    {
        $this->cs_permis = $cs_permis;

        return $this;
    }

    /**
     * Get the value of cs_assurance
     */ 
    public function getCsassurance()
    {
        return $this->cs_assurance;
    }

    /**
     * Set the value of cs_assurance
     *
     * @return  self
     */ 
    public function setCsassurance($cs_assurance)
    {
        $this->cs_assurance = $cs_assurance;

        return $this;
    }

    /**
     * Get the value of stagiaires
     */ 
    public function getStagiaires()
    {
        return $this->stagiaires;
    }

    /**
     * Set the value of stagiaires
     *
     * @return  self
     */ 
    public function setStagiaires($stagiaires)
    {
        $this->stagiaires = $stagiaires;

        return $this;
    }

    /**
     * Get the value of tribunaux
     */ 
    public function getTribunaux()
    {
        return $this->tribunaux;
    }

    /**
     * Set the value of tribunaux
     *
     * @return  self
     */ 
    public function setTribunaux($tribunaux)
    {
        $this->tribunaux = $tribunaux;

        return $this;
    }

    /**
     * Get the value of types_infractions
     */ 
    public function getTypesinfractions()
    {
        return $this->types_infractions;
    }

    /**
     * Set the value of types_infractions
     *
     * @return  self
     */ 
    public function setTypesinfractions($types_infractions)
    {
        $this->types_infractions = $types_infractions;

        return $this;
    }
    public function __toString() {
        return $this->types_infractions;
    }
}