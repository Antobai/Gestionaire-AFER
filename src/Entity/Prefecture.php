<?php



namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;



/**

 * @ORM\Entity(repositoryClass="App\Repository\PrefectureRepository")

 */

class Prefecture

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
    private $prefecture;
   /** 
    * @ORM\OneToOne(targetEntity="App\Entity\Permis", inversedBy="prefectures")
    * @ORM\JoinColumn(nullable=true)
    */
    private $permis;
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
     * Get the value of prefecture
     */ 
    public function getPrefecture()
    {
        return $this->prefecture;
    }

    /**
     * Set the value of prefecture
     *
     * @return  self
     */ 
    public function setPrefecture($prefecture)
    {
        $this->prefecture = $prefecture;

        return $this;
    }

    /**
     * Get the value of permis
     */ 
    public function getPermis()
    {
        return $this->permis;
    }

    /**
     * Set the value of permis
     *
     * @return  self
     */ 
    public function setPermis($permis)
    {
        $this->permis = $permis;

        return $this;
    }
    public function __toString() {
        return $this->prefecture;
    }
}