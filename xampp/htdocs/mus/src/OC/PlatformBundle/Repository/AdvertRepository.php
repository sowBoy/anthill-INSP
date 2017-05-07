<?php
// src/OC/PlatformBundle/Repository/AdvertRepository.php

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AdvertRepository extends EntityRepository
{
  public function getAdvertsBefore(\Datetime $date)
  {
    return $this->createQueryBuilder('a')
      ->where('a.updatedAt <= :date')                      // Date de modification antérieure à :date
      ->orWhere('a.updatedAt IS NULL AND a.date <= :date') // Si la date de modification est vide, on vérifie la date de création
      ->andWhere('a.applications IS EMPTY')                // On vérifie que l'annonce ne contient aucune candidature
      ->setParameter('date', $date)
      ->getQuery()
      ->getResult()
      ;
  }

  public function recherche($chaine)
    {
         $qb = $this->createQueryBuilder('a')
                    ->select('a')
                    ->where('a.title like :chaine')
                    ->orderBy('a.id')
                    ->setParameter('chaine', $chaine);
        return $qb->getQuery()->getResult();
    }	
  

  

  protected function whereCurrentYear(QueryBuilder $qb)
  {
    $qb
      ->andWhere('a.date BETWEEN :start AND :end')
      ->setParameter('start', new \Datetime(date('Y') . '-01-01')) // Date entre le 1er janvier de cette année
      ->setParameter('end', new \Datetime(date('Y') . '-12-31'))   // Et le 31 décembre de cette année
    ;
  }
}
