<?php



namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;



/**

 * @ORM\Entity(repositoryClass="App\Repository\CasRepository")

 */

class Cas

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
    private $cas;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
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
     * Get the value of cas
     */ 
    public function getCas()
    {
        return $this->cas;
    }

    /**
     * Set the value of cas
     *
     * @return  self
     */ 
    public function setCas($cas)
    {
        $this->cas = $cas;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public function __toString() {
        return $this->cas;
    }
}