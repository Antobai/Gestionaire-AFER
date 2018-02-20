<?php



namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;



/**

 * @ORM\Entity(repositoryClass="App\Repository\Stagiaire_StageRepository")

 */

class Stagiaire_Stage

{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="boolean", options={"default":false})
     */
    private $paye;
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cas", mappedBy="stagiaires_stages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $cas;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bordereau", mappedBy="stagiaires_stages")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bordereaux;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stagiaire")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stage")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stages;
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
     * Get the value of paye
     */ 
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set the value of paye
     *
     * @return  self
     */ 
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of stages
     */ 
    public function getStages()
    {
        return $this->stages;
    }

    /**
     * Set the value of stages
     *
     * @return  self
     */ 
    public function setStages($stages)
    {
        $this->stages = $stages;

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
     * Get the value of bordereaux
     */ 
    public function getBordereaux()
    {
        return $this->bordereaux;
    }

    /**
     * Set the value of bordereaux
     *
     * @return  self
     */ 
    public function setBordereaux($bordereaux)
    {
        $this->bordereaux = $bordereaux;

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
}