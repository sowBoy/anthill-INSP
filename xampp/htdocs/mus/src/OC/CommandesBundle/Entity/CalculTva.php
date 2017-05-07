<?php

namespace OC\CommandesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalculTva
 *
 * @ORM\Table(name="calcul_tva")
 * @ORM\Entity(repositoryClass="OC\CommandesBundle\Repository\CalculTvaRepository")
 */
class CalculTva
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="caseRef", type="float")
     */
    private $caseRef;

    /**
     * @var string
     *
     * @ORM\Column(name="caseValue", type="float")
     */
    private $caseValue;
	
	
	/**
     * @ORM\ManyToOne(targetEntity="Commandes", inversedBy="lesTvas", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set caseRef
     *
     * @param float $caseRef
     *
     * @return CalculTva
     */
    public function setCaseRef($caseRef)
    {
        $this->caseRef = $caseRef;

        return $this;
    }

    /**
     * Get caseRef
     *
     * @return float
     */
    public function getCaseRef()
    {
        return $this->caseRef;
    }

    

    /**
     * Set caseValue
     *
     * @param float $caseValue
     *
     * @return CalculTva
     */
    public function setCaseValue($caseValue)
    {
        $this->caseValue = $caseValue;

        return $this;
    }

    /**
     * Get caseValue
     *
     * @return float
     */
    public function getCaseValue()
    {
        return $this->caseValue;
    }

    /**
     * Set commande
     *
     * @param \OC\CommandesBundle\Entity\Commandes $commande
     *
     * @return CalculTva
     */
    public function setCommande(\OC\CommandesBundle\Entity\Commandes $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \OC\CommandesBundle\Entity\Commandes
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
