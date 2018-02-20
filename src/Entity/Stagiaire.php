<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StagiaireRepository")
 */
class Stagiaire
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
    private $genre;
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
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_de_naissance;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieu_de_naissance;
        /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $pays;
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
    private $commune;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_telephone_fixe;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_telephone_portable;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numero_telephone_portable_deux;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse_email;
    /**
     * @ORM\Column(type="boolean", options={"default":false})
     */
    private $carte_avantage_jeunes;
    /**
     * @ORM\Column(type="boolean", options={"default":false})
     */
    private $partenaires;
        /**
     * @ORM\Column(type="boolean", options={"default":false})
     */
    private $adherents;
    /**
     *
     * @ORM\OneToOne(targetEntity="App\Entity\Permis", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @ORM\Column(type="integer")
     */
    private $permis;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Bordereau", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $bordereaux;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Administration", mappedBy="stagiaires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $administrations;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Cas", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $cas;
     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Infraction", mappedBy="stagiaires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $infractions;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Stagiaire_Stage", mappedBy="stages")
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
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

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
     * Get the value of date_de_naissance
     */ 
    public function getDatedenaissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * Set the value of date_de_naissance
     *
     * @return  self
     */ 
    public function setDatedenaissance($date_de_naissance)
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    /**
     * Get the value of lieu_de_naissance
     */ 
    public function getLieudenaissance()
    {
        return $this->lieu_de_naissance;
    }

    /**
     * Set the value of lieu_de_naissance
     *
     * @return  self
     */ 
    public function setLieudenaissance($lieu_de_naissance)
    {
        $this->lieu_de_naissance = $lieu_de_naissance;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

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
     * Get the value of commune
     */ 
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set the value of commune
     *
     * @return  self
     */ 
    public function setCommune($commune)
    {
        $this->commune = $commune;

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
     * Get the value of carte_avantage_jeunes
     */ 
    public function getCarteavantagejeunes()
    {
        return $this->carte_avantage_jeunes;
    }

    /**
     * Set the value of carte_avantage_jeunes
     *
     * @return  self
     */ 
    public function setCarteavantagejeunes($carte_avantage_jeunes)
    {
        $this->carte_avantage_jeunes = $carte_avantage_jeunes;

        return $this;
    }

    /**
     * Get the value of partenaires
     */ 
    public function getPartenaires()
    {
        return $this->partenaires;
    }

    /**
     * Set the value of partenaires
     *
     * @return  self
     */ 
    public function setPartenaires($partenaires)
    {
        $this->partenaires = $partenaires;

        return $this;
    }

    /**
     * Get the value of adherents
     */ 
    public function getAdherents()
    {
        return $this->adherents;
    }

    /**
     * Set the value of adherents
     *
     * @return  self
     */ 
    public function setAdherents($adherents)
    {
        $this->adherents = $adherents;

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
     * Get the value of administrations
     */ 
    public function getAdministrations()
    {
        return $this->administrations;
    }

    /**
     * Set the value of administrations
     *
     * @return  self
     */ 
    public function setAdministrations($administrations)
    {
        $this->administrations = $administrations;

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
     * Get the value of type_infractions
     */ 
    public function getTypeInfractions()
    {
        return $this->type_infractions;
    }

    /**
     * Set the value of type_infractions
     *
     * @return  self
     */ 
    public function setTypeInfractions($type_infractions)
    {
        $this->type_infractions = $type_infractions;

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
    public function __toString() {
    return $this->nom . $this->prenom;
}

    /**
     * Get the value of numero_telephone_portable_deux
     */ 
    public function getNumeroTelephonePortableDeux()
    {
        return $this->numero_telephone_portable_deux;
    }

    /**
     * Set the value of numero_telephone_portable_deux
     *
     * @return  self
     */ 
    public function setNumeroTelephonePortableDeux($numero_telephone_portable_deux)
    {
        $this->numero_telephone_portable_deux = $numero_telephone_portable_deux;

        return $this;
    }
}