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
     * @ORM\Column(type="string", nullable=false)
     */
    private $numero_stage;
     /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date_de_stage;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Animateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $animateur;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Animateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $animateur_deux;
    /**
     * @ORM\Column(type="boolean", options={"default":false})
     * @ORM\JoinColumn(nullable=true)
     */
    private $stage_hpo;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lieux_de_stage", inversedBy="stages")
     * @ORM\JoinColumn(nullable=false) 
     */
    private $lieux_de_stage;
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Stagiaire_Stage", mappedBy="stages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires;
    
    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Date De Stage
     *
     * @return mixed
     */
    public function getDateDeStage()
    {
        return $this->date_de_stage;
    }

    /**
     * Set the value of Date De Stage
     *
     * @param mixed date_de_stage
     *
     * @return self
     */
    public function setDateDeStage($date_de_stage)
    {
        $this->date_de_stage = $date_de_stage;

        return $this;
    }

    /**
     * Get the value of Animateur
     *
     * @return mixed
     */
    public function getAnimateur()
    {
        return $this->animateur;
    }

    /**
     * Set the value of Animateur
     *
     * @param mixed animateur
     *
     * @return self
     */
    public function setAnimateur($animateur)
    {
        $this->animateur = $animateur;

        return $this;
    }

    /**
     * Get the value of Stage Hpo
     *
     * @return mixed
     */
    public function getStageHpo()
    {
        return $this->stage_hpo;
    }

    /**
     * Set the value of Stage Hpo
     *
     * @param mixed stage_hpo
     *
     * @return self
     */
    public function setStageHpo($stage_hpo)
    {
        $this->stage_hpo = $stage_hpo;

        return $this;
    }

    /**
     * Get the value of Lieux De Stage
     *
     * @return mixed
     */
    public function getLieuxDeStage()
    {
        return $this->lieux_de_stage;
    }

    /**
     * Set the value of Lieux De Stage
     *
     * @param mixed lieux_de_stage
     *
     * @return self
     */
    public function setLieuxDeStage($lieux_de_stage)
    {
        $this->lieux_de_stage = $lieux_de_stage;

        return $this;
    }

    /**
     * Get the value of Stagiaires
     *
     * @return mixed
     */
    public function getStagiaires()
    {
        return $this->stagiaires;
    }

    /**
     * Set the value of Stagiaires
     *
     * @param mixed stagiaires
     *
     * @return self
     */
    public function setStagiaires($stagiaires)
    {
        $this->stagiaires = $stagiaires;

        return $this;
    }
    /**
     * Get the value of animateur_deux
     */ 
    public function getAnimateurDeux()
    {
        return $this->animateur_deux;
    }

    /**
     * Set the value of animateur_deux
     *
     * @return self
     */ 
    public function setAnimateurDeux($animateur_deux)
    {
        $this->animateur_deux = $animateur_deux;

        return $this;
    }

    /**
     * Get the value of animateur_deux
     */ 
    public function getAnimateur_deux()
    {
        return $this->animateur_deux;
    }

    /**
     * Set the value of animateur_deux
     *
     * @return  self
     */ 
    public function setAnimateur_deux($animateur_deux)
    {
        $this->animateur_deux = $animateur_deux;

        return $this;
    }

    /**
     * Get the value of numero_stage
     */ 
    public function getNumerostage()
    {
        return $this->numero_stage;
    }

    /**
     * Set the value of numero_stage
     *
     * @return  self
     */ 
    public function setNumerostage($numero_stage)
    {
        $this->numero_stage = $numero_stage;

        return $this;
    }

    public function __toString() {     
          return $this->numero_stage;
      }
  
}
