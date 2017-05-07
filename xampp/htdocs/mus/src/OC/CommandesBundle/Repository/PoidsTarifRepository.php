<?php

namespace OC\CommandesBundle\Repository;

/**
 * PoidsTarifRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PoidsTarifRepository extends \Doctrine\ORM\EntityRepository
{
    public function sommationTarif($thisC)
    {
        $qb = $this->createQueryBuilder('p')
				->select('SUM(p.caseTar) AS totalTarif')
                ->where('p.commande = :commande')
                ->setParameter('commande', $thisC);
        
        return $qb->getQuery()->getScalarResult();
    }	
}
