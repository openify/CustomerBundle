<?php

namespace Openify\Bundle\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Openify\Bundle\EcommerceBundle\Entity\ShopUsers
 *
 * @ORM\Table(name="shop_users")
 * @ORM\Entity
 */
class User implements UserInterface {
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=false)
     */
    private $email;
    
    /**
     * @var string $password
     *
     * @ORM\Column(name="pass", type="string", length=40, nullable=false)
     */
    private $password;
    
    /**
     * @ORM\Column(name="salt", type="string", length=40, nullable=false)
     */
    private $salt;
    
    /**
     * @var string $priv
     *
     * @ORM\Column(name="priv", type="string", length=10, nullable=false)
     */
    private $priv;
    
    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=70, nullable=true)
     */
    private $nom;
    
    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=70, nullable=true)
     */
    private $prenom;
    
    /**
     * @var string $societe
     *
     * @ORM\Column(name="societe", type="string", length=70, nullable=true)
     */
    private $societe;
    
    /**
     * @var text $adresse
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;
    
    /**
     * @var string $postal
     *
     * @ORM\Column(name="postal", type="string", length=9, nullable=true)
     */
    private $postal;
    
    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string", length=70, nullable=true)
     */
    private $ville;
    
    /**
     * @var string $pays
     *
     * @ORM\Column(name="pays", type="string", length=2, nullable=true)
     */
    private $pays;
    
    /**
     * @var string $tel
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    private $tel;
    
    /**
     * @var string $portable
     *
     * @ORM\Column(name="portable", type="string", length=20, nullable=true)
     */
    private $portable;
    
    /**
     * @var string $fax
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;
    
    /**
     * @var decimal $reduction
     *
     * @ORM\Column(name="reduction", type="decimal", nullable=true)
     */
    private $reduction;
    
    /**
     * @var date $createdAt
     *
     * @ORM\Column(name="inscription", type="date", nullable=false)
     */
    private $createdAt;
    
    /**
     * @var datetime $lastConnection
     *
     * @ORM\Column(name="last_connect", type="datetime", nullable=true)
     */
    private $lastConnection;
    
    /**
     * @var datetime $actuelConnect
     *
     * @ORM\Column(name="actuel_connect", type="datetime", nullable=true)
     */
    private $actuelConnect;
    
    /**
     * @var string $tva
     *
     * @ORM\Column(name="tva", type="string", length=14, nullable=true)
     */
    private $tva;
    
    /**
     * @var text $axxAdmin
     *
     * @ORM\Column(name="axx_admin", type="text", nullable=true)
     */
    private $axxAdmin;
    
    public function __construct() {
        $this->salt = sha1 ( uniqid ( mt_rand (), true ) );
        $this->createdAt = new \DateTime ();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }
    
    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function getSalt() {
        return $this->salt;
    }
    
    /**
     * Set priv
     *
     * @param string $priv
     */
    public function setPriv($priv) {
        $this->priv = $priv;
    }
    
    /**
     * Get priv
     *
     * @return string 
     */
    public function getPriv() {
        return $this->priv;
    }
    
    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }
    
    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    
    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }
    
    /**
     * Set societe
     *
     * @param string $societe
     */
    public function setSociete($societe) {
        $this->societe = $societe;
    }
    
    /**
     * Get societe
     *
     * @return string 
     */
    public function getSociete() {
        return $this->societe;
    }
    
    /**
     * Set adresse
     *
     * @param text $adresse
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    
    /**
     * Get adresse
     *
     * @return text 
     */
    public function getAdresse() {
        return $this->adresse;
    }
    
    /**
     * Set postal
     *
     * @param string $postal
     */
    public function setPostal($postal) {
        $this->postal = $postal;
    }
    
    /**
     * Get postal
     *
     * @return string 
     */
    public function getPostal() {
        return $this->postal;
    }
    
    /**
     * Set ville
     *
     * @param string $ville
     */
    public function setVille($ville) {
        $this->ville = $ville;
    }
    
    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille() {
        return $this->ville;
    }
    
    /**
     * Set pays
     *
     * @param string $pays
     */
    public function setPays($pays) {
        $this->pays = $pays;
    }
    
    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays() {
        return $this->pays;
    }
    
    /**
     * Set tel
     *
     * @param string $tel
     */
    public function setTel($tel) {
        $this->tel = $tel;
    }
    
    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel() {
        return $this->tel;
    }
    
    /**
     * Set portable
     *
     * @param string $portable
     */
    public function setPortable($portable) {
        $this->portable = $portable;
    }
    
    /**
     * Get portable
     *
     * @return string 
     */
    public function getPortable() {
        return $this->portable;
    }
    
    /**
     * Set fax
     *
     * @param string $fax
     */
    public function setFax($fax) {
        $this->fax = $fax;
    }
    
    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax() {
        return $this->fax;
    }
    
    /**
     * Set reduction
     *
     * @param decimal $reduction
     */
    public function setReduction($reduction) {
        $this->reduction = $reduction;
    }
    
    /**
     * Get reduction
     *
     * @return decimal 
     */
    public function getReduction() {
        return $this->reduction;
    }
    
    /**
     * Set inscription
     *
     * @param date $inscription
     */
    public function setInscription($inscription) {
        $this->inscription = $inscription;
    }
    
    /**
     * Get inscription
     *
     * @return date 
     */
    public function getInscription() {
        return $this->inscription;
    }
    
    /**
     * Set lastConnect
     *
     * @param datetime $lastConnect
     */
    public function setLastConnect($lastConnect) {
        $this->lastConnect = $lastConnect;
    }
    
    /**
     * Get lastConnect
     *
     * @return datetime 
     */
    public function getLastConnect() {
        return $this->lastConnect;
    }
    
    /**
     * Set actuelConnect
     *
     * @param datetime $actuelConnect
     */
    public function setActuelConnect($actuelConnect) {
        $this->actuelConnect = $actuelConnect;
    }
    
    /**
     * Get actuelConnect
     *
     * @return datetime 
     */
    public function getActuelConnect() {
        return $this->actuelConnect;
    }
    
    /**
     * Set tva
     *
     * @param string $tva
     */
    public function setTva($tva) {
        $this->tva = $tva;
    }
    
    /**
     * Get tva
     *
     * @return string 
     */
    public function getTva() {
        return $this->tva;
    }
    
    /**
     * Set axxAdmin
     *
     * @param text $axxAdmin
     */
    public function setAxxAdmin($axxAdmin) {
        $this->axxAdmin = $axxAdmin;
    }
    
    /**
     * Get axxAdmin
     *
     * @return text 
     */
    public function getAxxAdmin() {
        return $this->axxAdmin;
    }
    public function getRoles() {
        return array ();
    }
    
    function getUsername() {
        return $this->getEmail ();
    }
    
    function eraseCredentials() {
    
    }
    
    public function equals(UserInterface $user) {
        if ($this->password !== $user->getPassword ()) {
            return false;
        }
        
        if ($this->salt !== $user->getSalt ()) {
            return false;
        }
        
        if ($this->username !== $user->getUsername ()) {
            return false;
        }
        
        return true;
    }
    
    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }
    
    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt) {
        $this->salt = $salt;
    }
    
    /**
     * Set createdAt
     *
     * @param date $createdAt
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }
    
    /**
     * Get createdAt
     *
     * @return date 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }
    
    /**
     * Set lastConnection
     *
     * @param datetime $lastConnection
     */
    public function setLastConnection($lastConnection) {
        $this->lastConnection = $lastConnection;
    }
    
    /**
     * Get lastConnection
     *
     * @return datetime 
     */
    public function getLastConnection() {
        return $this->lastConnection;
    }
}