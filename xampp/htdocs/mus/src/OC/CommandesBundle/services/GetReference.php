<?php
namespace OC\CommandesBundle\services;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class GetReference 
{
    public function __construct($securityContext, $entityManager)
    {
        $this->securityContext = $securityContext;
		//$securityContext = $this->security.token_storage;
		 $this->em = $entityManager;
    }
    
    public function reference()
    {
        $reference = $this->em->getRepository('OCCommandesBundle:Commandes')->findOneBy(array('valider' => 1), array('id' => 'DESC'),1,1);
        
        if (!$reference)
            return 1;
        else 
            return $reference->getReference() +1;
    }
}