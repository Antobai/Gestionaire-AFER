<?php



namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;



/**

 * @ORM\Entity(repositoryClass="App\Repository\BordereauRepository")

 */

class Bordereau

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
    private $autorite;
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $etablissement;
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $adresse;
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $code_postal;
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $ville;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Prefecture", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $prefectures;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tribunal", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $tribunaux;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Stagiaire_Stage", mappedBy="bordereaux")
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
     * Get the value of autorite
     */ 
    public function getAutorite()
    {
        return $this->autorite;
    }

    /**
     * Set the value of autorite
     *
     * @return  self
     */ 
    public function setAutorite($autorite)
    {
        $this->autorite = $autorite;

        return $this;
    }

    /**
     * Get the value of etablissement
     */ 
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set the value of etablissement
     *
     * @return  self
     */ 
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

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

    /**
     * Get the value of tribunaux
     */ 
    public function getTribunaux()
    {
        return $this->tribunaux;
    }

    /**
     * Set the value of tribunaux
     *
     * @return  self
     */ 
    public function setTribunaux($tribunaux)
    {
        $this->tribunaux = $tribunaux;

        return $this;
    }

    /**
     * Get the value of stagiaires_stages
     */ 
    public function getStagiairesStages()
    {
        return $this->stagiaires_stages;
    }

    /**
     * Set the value of stagiaires_stages
     *
     * @return  self
     */ 
    public function setStagiairesStages($stagiaires_stages)
    {
        $this->stagiaires_stages = $stagiaires_stages;

        return $this;
    }

    /**
     * Get the value of code_postal
     */ 
    public function getCodepostal()
    {
        return $this->code_postal;
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */ 
    public function setCodepostal($code_postal)
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function __toString(){
        $code_postal = strval($this->code_postal);
        $bordereaux = $this->autorite . " " . $this->etablissement . " " . $this->adresse . " " . $this->ville ;
        return $bordereaux;
    }

}