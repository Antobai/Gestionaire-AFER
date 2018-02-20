<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TribunalRepository")
 */
class Tribunal
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
    private $tribunal;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_tribunal;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $numero_parquet;
     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Infraction", inversedBy="stagiaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $infractions;
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
     * Get the value of tribunal
     */ 
    public function getTribunal()
    {
        return $this->tribunal;
    }

    /**
     * Set the value of tribunal
     *
     * @return  self
     */ 
    public function setTribunal($tribunal)
    {
        $this->tribunal = $tribunal;

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
     * Get the value of numero_parquet
     */ 
    public function getNumeroparquet()
    {
        return $this->numero_parquet;
    }

    /**
     * Set the value of numero_parquet
     *
     * @return  self
     */ 
    public function setNumeroparquet($numero_parquet)
    {
        $this->numero_parquet = $numero_parquet;

        return $this;
    }

    /**
     * Get the value of infractions
     */ 
    public function getInfractions()
    {
        return $this->infractions;
    }

    /**
     * Set the value of infractions
     *
     * @return  self
     */ 
    public function setInfractions($infractions)
    {
        $this->infractions = $infractions;

        return $this;
    }
}