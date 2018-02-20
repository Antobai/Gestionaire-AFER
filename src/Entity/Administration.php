<?php



namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;



/**

 * @ORM\Entity(repositoryClass="App\Repository\AdministrationRepository")

 */

class Administration

{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $envoi_inscription;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $envoi_convocation;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $courrier;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $email;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alerte;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bulletin_inscription;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cni;
     /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $copie_permis;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $releve_integral;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $decision_judiciaire;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $n48;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $observations;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stagiaire", inversedBy="stagiaires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $stagiaires;
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
     * Get the value of envoi_inscription
     */ 
    public function getEnvoiinscription()
    {
        return $this->envoi_inscription;
    }

    /**
     * Set the value of envoi_inscription
     *
     * @return  self
     */ 
    public function setEnvoiinscription($envoi_inscription)
    {
        $this->envoi_inscription = $envoi_inscription;

        return $this;
    }

    /**
     * Get the value of envoi_convocation
     */ 
    public function getEnvoiconvocation()
    {
        return $this->envoi_convocation;
    }

    /**
     * Set the value of envoi_convocation
     *
     * @return  self
     */ 
    public function setEnvoiconvocation($envoi_convocation)
    {
        $this->envoi_convocation = $envoi_convocation;

        return $this;
    }

    /**
     * Get the value of courrier
     */ 
    public function getCourrier()
    {
        return $this->courrier;
    }

    /**
     * Set the value of courrier
     *
     * @return  self
     */ 
    public function setCourrier($courrier)
    {
        $this->courrier = $courrier;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of bulletin_inscription
     */ 
    public function getBulletininscription()
    {
        return $this->bulletin_inscription;
    }

    /**
     * Set the value of bulletin_inscription
     *
     * @return  self
     */ 
    public function setBulletininscription($bulletin_inscription)
    {
        $this->bulletin_inscription = $bulletin_inscription;

        return $this;
    }

    /**
     * Get the value of alerte
     */ 
    public function getAlerte()
    {
        return $this->alerte;
    }

    /**
     * Set the value of alerte
     *
     * @return  self
     */ 
    public function setAlerte($alerte)
    {
        $this->alerte = $alerte;

        return $this;
    }

    /**
     * Get the value of cni
     */ 
    public function getCni()
    {
        return $this->cni;
    }

    /**
     * Set the value of cni
     *
     * @return  self
     */ 
    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * Get the value of copie_permis
     */ 
    public function getCopiepermis()
    {
        return $this->copie_permis;
    }

    /**
     * Set the value of copie_permis
     *
     * @return  self
     */ 
    public function setCopiepermis($copie_permis)
    {
        $this->copie_permis = $copie_permis;

        return $this;
    }

    /**
     * Get the value of releve_integral
     */ 
    public function getReleveintegral()
    {
        return $this->releve_integral;
    }

    /**
     * Set the value of releve_integral
     *
     * @return  self
     */ 
    public function setReleveintegral($releve_integral)
    {
        $this->releve_integral = $releve_integral;

        return $this;
    }

    /**
     * Get the value of decision_judiciaire
     */ 
    public function getDecisionjudiciaire()
    {
        return $this->decision_judiciaire;
    }

    /**
     * Set the value of decision_judiciaire
     *
     * @return  self
     */ 
    public function setDecisionjudiciaire($decision_judiciaire)
    {
        $this->decision_judiciaire = $decision_judiciaire;

        return $this;
    }

    /**
     * Get the value of n48
     */ 
    public function getN48()
    {
        return $this->n48;
    }

    /**
     * Set the value of n48
     *
     * @return  self
     */ 
    public function setN48($n48)
    {
        $this->n48 = $n48;

        return $this;
    }

    /**
     * Get the value of observations
     */ 
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set the value of observations
     *
     * @return  self
     */ 
    public function setObservations($observations)
    {
        $this->observations = $observations;

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
    public function __toString() 
    {
        return $this->stagiaires;
    }
}