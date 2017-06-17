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
	
	public function findByThisV($valid)
{
  $qb = $this->createQueryBuilder('a');
  $qb->where('a.valid = :valid')
       ->setParameter('valid', $valid)
     ->orderBy('a.date', 'DESC');

  return $qb
    ->getQuery()
    ->getResult();
  
}
}
