<?php



namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;



/**

 * @ORM\Entity(repositoryClass="App\Repository\PermisRepository")

 */

class Permis

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
    private $permis;
    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $delivre_le;
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Stagiaire", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Prefecture", inversedBy="permis")
     * @ORM\JoinColumn(nullable=true)
     */
    private $prefectures;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of permis
     */ 
    public function getpermis()
    {
        return $this->permis;
    }

    /**
     * Set the value of permis
     * @return  self
     */ 
    public function setpermis($permis)
    {
        $this->permis = $permis;

        return $this;
    }

    /**
     * Get the value of delivre_le
     */ 
    public function getDelivrele()
    {
        return $this->delivre_le;
    }

    /**
     * Set the value of delivre_le
     * @return  self
     */ 
    public function setDelivrele($delivre_le)
    {
        $this->delivre_le = $delivre_le;

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
     * Get the value of prefectures
     */ 
    public function getPrefectures()
    {
        return $this->prefectures;
    }

    /**
     * Set the value of prefectures
     *
     * @return  self
     */ 
    public function setPrefectures($prefectures)
    {
        $this->prefectures = $prefectures;

        return $this;
    }

}