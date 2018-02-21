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
     * @ORM\Column(type="string")
     */
    private $civilite;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom_epouse;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $numero_permis;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $delivre_le;
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Stagiaire", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Prefecture", mappedBy="permis")
     * @ORM\JoinColumn(nullable=true)
     */
    private $prefectures;
    /**
     * Get the value of id
     */ 
    public function getIdPermis()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setIdPermis($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of civilite
     */ 
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set the value of civilite
     *
     * @return  self
     */ 
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of nom_epouse
     */ 
    public function getNomepouse()
    {
        return $this->nom_epouse;
    }

    /**
     * Set the value of nom_epouse
     *
     * @return  self
     */ 
    public function setNomepouse($nom_epouse)
    {
        $this->nom_epouse = $nom_epouse;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of numero_permis
     */ 
    public function getNumeropermis()
    {
        return $this->numero_permis;
    }

    /**
     * Set the value of numero_permis
     *
     * @return  self
     */ 
    public function setNumeropermis($numero_permis)
    {
        $this->numero_permis = $numero_permis;

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
     *
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