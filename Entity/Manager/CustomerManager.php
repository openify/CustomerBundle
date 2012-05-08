<?php
namespace Openify\Bundle\CustomerBundle\Entity\Manager;

use JMS\DiExtraBundle\Config\FastDirectoriesResource;

use Doctrine\ORM\EntityManager;
use Openify\Bundle\CustomerBundle\Entity\Manager\BaseManager;
use Openify\Bundle\CustomerBundle\Entity\Customer;

class CustomerManager extends BaseManager {
    protected $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    /**
     * Check if a customer is deletable
     *
     * @param Customer $customer
     * @return boolean 
     */
    public function isDeletable(Customer $customer) {
        
        if ($this->hasOrder($customer)){
            return false;
        }
        
        return true;
    }

    public function hasOrder(Customer $customer) {
        return (count ( $customer->getOrders() ) > 0) ? true : false ;
    }
    
    
    public function getRepository() {
        return $this->em->getRepository ( 'OpenifyCustomerBundle:Customer' );
    }

}