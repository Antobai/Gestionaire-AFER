<?php



namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;



/**

 * @ORM\Entity(repositoryClass="App\Repository\AnimateurRepository")

 */

class Animateur

{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     */
    private $id;
     /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $civilite;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $statut;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $gta;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $raison_sociale;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $code_postal;
     /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $ville;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $region;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_telephone_fixe;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_telephone_portable;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse_email;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $urssaf;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $siret;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $forfait;
        /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $km_ar;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $repas;
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Fonction", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $fonctions;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Stage", cascade={"persist"})
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
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }
    
    /**
     * Get the value of gta
     */ 
    public function getGta()
    {
        return $this->gta;
    }

    /**
     * Set the value of gta
     *
     * @return  self
     */ 
    public function setGta($gta)
    {
        $this->gta = $gta;

        return $this;
    }

    /**
     * Get the value of raison_sociale
     */ 
    public function getRaisonsociale()
    {
        return $this->raison_sociale;
    }

    /**
     * Set the value of raison_sociale
     *
     * @return  self
     */ 
    public function setRaisonsociale($raison_sociale)
    {
        $this->raison_sociale = $raison_sociale;

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
     * Get the value of region
     */ 
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of region
     *
     * @return  self
     */ 
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get the value of numero_telephone_fixe
     */ 
    public function getNumerotelephonefixe()
    {
        return $this->numero_telephone_fixe;
    }

    /**
     * Set the value of numero_telephone_fixe
     *
     * @return  self
     */ 
    public function setNumerotelephonefixe($numero_telephone_fixe)
    {
        $this->numero_telephone_fixe = $numero_telephone_fixe;

        return $this;
    }

    /**
     * Get the value of numero_telephone_portable
     */ 
    public function getNumerotelephoneportable()
    {
        return $this->numero_telephone_portable;
    }

    /**
     * Set the value of numero_telephone_portable
     *
     * @return  self
     */ 
    public function setNumerotelephoneportable($numero_telephone_portable)
    {
        $this->numero_telephone_portable = $numero_telephone_portable;

        return $this;
    }

    /**
     * Get the value of adresse_email
     */ 
    public function getAdresseemail()
    {
        return $this->adresse_email;
    }

    /**
     * Set the value of adresse_email
     *
     * @return  self
     */ 
    public function setAdresseemail($adresse_email)
    {
        $this->adresse_email = $adresse_email;

        return $this;
    }

    /**
     * Get the value of urssaf
     */ 
    public function getUrssaf()
    {
        return $this->urssaf;
    }

    /**
     * Set the value of urssaf
     *
     * @return  self
     */ 
    public function setUrssaf($urssaf)
    {
        $this->urssaf = $urssaf;

        return $this;
    }

    /**
     * Get the value of siret
     */ 
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set the value of siret
     *
     * @return  self
     */ 
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get the value of forfait
     */ 
    public function getForfait()
    {
        return $this->forfait;
    }

    /**
     * Set the value of forfait
     *
     * @return  self
     */ 
    public function setForfait($forfait)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get the value of km_ar
     */ 
    public function getKmar()
    {
        return $this->km_ar;
    }

    /**
     * Set the value of km_ar
     *
     * @return  self
     */ 
    public function setKmar($km_ar)
    {
        $this->km_ar = $km_ar;

        return $this;
    }

    /**
     * Get the value of repas
     */ 
    public function getRepas()
    {
        return $this->repas;
    }

    /**
     * Set the value of repas
     *
     * @return  self
     */ 
    public function setRepas($repas)
    {
        $this->repas = $repas;

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
     * Get the value of fonctions
     */ 
    public function getFonctions()
    {
        return $this->fonctions;
    }

    /**
     * Set the value of fonctions
     *
     * @return  self
     */ 
    public function setFonctions($fonctions)
    {
        $this->fonctions = $fonctions;

        return $this;
    }
}