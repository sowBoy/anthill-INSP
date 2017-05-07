<?php

namespace OC\AnnonceBundle\Repository;

/**
 * 
 */
class AnnonceRepository extends \Doctrine\ORM\EntityRepository
{
 public function recherche($chaine)
    {
         $qb = $this->createQueryBuilder('a')
                    ->select('a')
                    ->where('a.title like :chaine')
                    ->orderBy('a.id')
                    ->setParameter('chaine', $chaine);
        return $qb->getQuery()->getResult();
    }	
}
