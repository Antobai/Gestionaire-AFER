<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StageRepository")
 */
class Stage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
     /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_de_stage;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $animateur;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $animateur_deux;
    /**
     * @ORM\Column(type="boolean", options={"default":false})
     * @ORM\JoinColumn(nullable=true)
     */
    private $stage_hpo;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lieux_de_stage", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
     private $lieux_de_stage;
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stagiaire", inversedBy="stagiaires_stages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires;

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
     * Get the value of date_de_stage
     */ 
    public function getDatedestage()
    {
        return $this->date_de_stage;
    }

    /**
     * Set the value of date_de_stage
     *
     * @return  self
     */ 
    public function setDatedestage($date_de_stage)
    {
        $this->date_de_stage = $date_de_stage;

        return $this;
    }

    /**
     * Get the value of lieu_de_stage
     */ 
    public function getLieudestage()
    {
        return $this->lieu_de_stage;
    }

    /**
     * Set the value of lieu_de_stage
     *
     * @return  self
     */ 
    public function setLieudestage($lieu_de_stage)
    {
        $this->lieu_de_stage = $lieu_de_stage;

        return $this;
    }

    /**
     * Get the value of animateur
     */ 
    public function getAnimateur()
    {
        return $this->animateur;
    }

    /**
     * Set the value of animateur
     *
     * @return  self
     */ 
    public function setAnimateur($animateur)
    {
        $this->animateur = $animateur;

        return $this;
    }
    /**
     * Get the value of animateur_deux
     */ 
    public function getAnimateurdeux()
    {
        return $this->animateur_deux;
    }

    /**
     * Set the value of animateur_deux
     *
     * @return  self
     */ 
    public function setAnimateurdeux($animateur_deux)
    {
        $this->animateur_deux = $animateur_deux;

        return $this;
    }
    /**
     * Get the value of stage_hpo
     */ 
    public function getStagehpo()
    {
        return $this->stage_hpo;
    }

    /**
     * Set the value of stage_hpo
     *
     * @return  self
     */ 
    public function setStagehpo($stage_hpo)
    {
        $this->stage_hpo = $stage_hpo;

        return $this;
    }

     /**
      * Get the value of Lieux_de_stage
      */ 
     public function getlieuxdestage()
     {
          return $this->lieux_de_stage;
     }

     /**
      * Set the value of Lieux_de_stage
      *
      * @return  self
      */ 
     public function setlieuxdestage($lieux_de_stage)
     {
          $this->lieux_de_stage = $lieux_de_stage;

          return $this;
     }
    public function __toString() {
        $date = $this->date_de_stage;
       $string = $date->format(DATE_RFC2822);
       var_dump($stagiaires);
    return $string.$this->lieux_de_stage ;//------------------------------------------------->lieu
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
}
