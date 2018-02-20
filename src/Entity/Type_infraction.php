<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Type_infractionRepository")
 */
class Type_infraction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     * @ORM\OneToMany(targetEntity="App\Entity\Infraction", mappedBy="types_infractions")
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