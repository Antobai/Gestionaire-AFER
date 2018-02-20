<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FonctionRepository")
 */
class Fonction
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
    private $fonction;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $fonction_deux;
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Animateur")
     */
    private $id_animateurs;

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
     * Get the value of fonction
     */ 
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set the value of fonction
     *
     * @return  self
     */ 
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get the value of fonction_deux
     */ 
    public function getFonctiondeux()
    {
        return $this->fonction_deux;
    }

    /**
     * Set the value of fonction_deux
     *
     * @return  self
     */ 
    public function setFonctiondeux($fonction_deux)
    {
        $this->fonction_deux = $fonction_deux;

        return $this;
    }

    /**
     * Get the value of id_animateurs
     */ 
    public function getIdanimateurs()
    {
        return $this->id_animateurs;
    }

    /**
     * Set the value of id_animateurs
     *
     * @return  self
     */ 
    public function setIdanimateurs($id_animateurs)
    {
        $this->id_animateurs = $id_animateurs;

        return $this;
    }
    public function __toString() {
        return $this->id_animateurs;
    }
}