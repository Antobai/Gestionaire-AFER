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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cas;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stagiaire_Stage", inversedBy="cas")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires_stages;

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
     * Get the value of stagiaires_stages
     */ 
    public function getStagiairesstages()
    {
        return $this->stagiaires_stages;
    }

    /**
     * Set the value of stagiaires_stages
     *
     * @return  self
     */ 
    public function setStagiairesstages($stagiaires_stages)
    {
        $this->stagiaires_stages = $stagiaires_stages;

        return $this;
    }
}