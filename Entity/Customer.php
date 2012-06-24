<?php

namespace Openify\Bundle\CustomerBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Openify\Bundle\CustomerBundle\Entity\Customer
 *
 * @ORM\Table(name="shop_users")
 * @ORM\Entity(repositoryClass="Openify\Bundle\CustomerBundle\Repository\CustomerRepository")
 */
class Customer implements UserInterface
{
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
     * @var string $lastname
     *
     * @ORM\Column(name="nom", type="string", length=70, nullable=true)
     */
    private $lastname;

    /**
     * @var string $firstname
     *
     * @ORM\Column(name="prenom", type="string", length=70, nullable=true)
     */
    private $firstname;

    /**
     * @var string $company
     *
     * @ORM\Column(name="societe", type="string", length=70, nullable=true)
     */
    private $company;

    /**
     * @var text $adress
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adress;

    /**
     * @var string $postcode
     *
     * @ORM\Column(name="postal", type="string", length=9, nullable=true)
     */
    private $postcode;

    /**
     * @var string $city
     *
     * @ORM\Column(name="ville", type="string", length=70, nullable=true)
     */
    private $city;

    /**
     * @var string $country
     *
     * @ORM\Column(name="pays", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var string $phone
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string $cellular
     *
     * @ORM\Column(name="portable", type="string", length=20, nullable=true)
     */
    private $cellular;

    /**
     * @var string $fax
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var decimal $discount
     *
     * @ORM\Column(name="reduction", type="decimal", nullable=true)
     */
    private $discount;

    /**
     * @var birthday $birthday
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;
    
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
     * @var datetime $actualConnect
     *
     * @ORM\Column(name="actuel_connect", type="datetime", nullable=true)
     */
    private $actualConnect;

    /**
     * @var string $vat
     *
     * @ORM\Column(name="tva", type="string", length=14, nullable=true)
     */
    private $vat;

    /**
     * @var text $axxAdmin
     *
     * @ORM\Column(name="axx_admin", type="text", nullable=true)
     */
    private $axxAdmin;

     /**
     * @var text $orders
     *
     * @ORM\OneToMany(targetEntity="Openify\Bundle\OrderBundle\Entity\Order", mappedBy="customer")
     */
    private $orders;

    public function __construct()
    {
        $this->salt = sha1 ( uniqid ( mt_rand (), true ) );
        $this->createdAt = new \DateTime ();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set priv
     *
     * @param string $priv
     */
    public function setPriv($priv)
    {
        $this->priv = $priv;
    }

    /**
     * Get priv
     *
     * @return string
     */
    public function getPriv()
    {
        return $this->priv;
    }
    public function getRoles()
    {
        return array ();
    }

    public function getUsername()
    {
        return $this->getEmail ();
    }

    public function eraseCredentials()
    {
    }

    public function equals(UserInterface $user)
    {
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
     * @param  string   $password
     * @return Customer
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set salt
     *
     * @param  string   $salt
     * @return Customer
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set lastname
     *
     * @param  string   $lastname
     * @return Customer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param  string   $firstname
     * @return Customer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set company
     *
     * @param  string   $company
     * @return Customer
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set adress
     *
     * @param  text     $adress
     * @return Customer
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return text
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set postcode
     *
     * @param  string   $postcode
     * @return Customer
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set city
     *
     * @param  string   $city
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param  string   $country
     * @return Customer
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone
     *
     * @param  string   $phone
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set cellular
     *
     * @param  string   $cellular
     * @return Customer
     */
    public function setCellular($cellular)
    {
        $this->cellular = $cellular;

        return $this;
    }

    /**
     * Get cellular
     *
     * @return string
     */
    public function getCellular()
    {
        return $this->cellular;
    }

    /**
     * Set fax
     *
     * @param  string   $fax
     * @return Customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set discount
     *
     * @param  decimal  $discount
     * @return Customer
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return decimal
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set createdAt
     *
     * @param  date     $createdAt
     * @return Customer
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return date
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set lastConnection
     *
     * @param  datetime $lastConnection
     * @return Customer
     */
    public function setLastConnection($lastConnection)
    {
        $this->lastConnection = $lastConnection;

        return $this;
    }

    /**
     * Get lastConnection
     *
     * @return datetime
     */
    public function getLastConnection()
    {
        return $this->lastConnection;
    }

    /**
     * Set actualConnect
     *
     * @param  datetime $actualConnect
     * @return Customer
     */
    public function setActualConnect($actualConnect)
    {
        $this->actualConnect = $actualConnect;

        return $this;
    }

    /**
     * Get actualConnect
     *
     * @return datetime
     */
    public function getActualConnect()
    {
        return $this->actualConnect;
    }

    /**
     * Set vat
     *
     * @param  string   $vat
     * @return Customer
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set axxAdmin
     *
     * @param  text     $axxAdmin
     * @return Customer
     */
    public function setAxxAdmin($axxAdmin)
    {
        $this->axxAdmin = $axxAdmin;

        return $this;
    }

    /**
     * Get axxAdmin
     *
     * @return text
     */
    public function getAxxAdmin()
    {
        return $this->axxAdmin;
    }

    /**
     * Add orders
     *
     * @param Openify\Bundle\OrderBundle\Entity\Order $orders
     */
    public function addOrder(\Openify\Bundle\OrderBundle\Entity\Order $orders)
    {
        $this->orders[] = $orders;
    }

    /**
     * Get orders
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set birthday
     *
     * @param date $birthday
     * @return Customer
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * Get birthday
     *
     * @return date 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
}