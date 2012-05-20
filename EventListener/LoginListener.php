<?php

namespace Openify\Bundle\CustomerBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\ORM\EntityManager;

/**
 * Custom login listener.
 */
class LoginListener
{
    /** @var \Symfony\Component\Security\Core\SecurityContext */
    private $context;

    /** @var \Doctrine\ORM\EntityManager */
    private $em;

    /**
     * Constructor
     *
     * @param SecurityContext $context
     * @param Doctrine        $doctrine
     */
    public function __construct(SecurityContext $context, EntityManager $em)
    {
        $this->context = $context;
        $this->em      = $em;
    }

    /**
     * Do the magic.
     *
     * @param  Event $event
     */
    public function onSecurityInteractiveLogin(Event $event)
    {
        $user = $this->context->getToken()->getUser();
        echo 'coucou'; die;
        // do all your magic here
    }
}