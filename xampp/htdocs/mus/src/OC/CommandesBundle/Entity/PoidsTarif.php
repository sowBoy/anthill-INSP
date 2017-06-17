<?php

namespace OC\CommandesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoidsTarif
 *
 * @ORM\Table(name="poids_tarif")
 * @ORM\Entity(repositoryClass="OC\CommandesBundle\Repository\PoidsTarifRepository")
 */
class PoidsTarif
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="caseP", type="float")
     */
    private $caseP;

    /**
     * @var float
     *
     * @ORM\Column(name="caseTar", type="float")
     */
    private $caseTar;
	
	/**
     * @var float
     *
     * @ORM\Column(name="caseMonney", type="float")
     */
    private $caseMonney;
	
	/**
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid = false;
	
	/**
     * @var float
     *
     * @ORM\Column(name="totMonney", type="float")
     */
    private $totMonney;

    /**
     * @ORM\ManyToOne(targetEntity="Commandes", inversedBy="poidsTarifs", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;
	
	/**
     * @var array
     *
     * @ORM\Column(name="tableau", type="array")
     */
    private $tableau;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nameShop", type="string", length=255)
     */
    private $nameShop;
	
	/**
     * @var string
     *
     * @ORM\Column(name="livraison", type="array")
     */
    private $livraison;
	
	/**
     * @var string
     *
     * @ORM\Column(name="facturation", type="array")
     */
    private $facturation;
	
	/**
     * @var string
     *
     * @ORM\Column(name="emailShop", type="string", length=255)
     */
    private $emailShop;

	
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
     * Set caseP
     *
     * @param float $caseP
     *
     * @return PoidsTarif
     */
    public function setCaseP($caseP)
    {
        $this->caseP = $caseP;

        return $this;
    }

    /**
     * Get caseP
     *
     * @return float
     */
    public function getCaseP()
    {
        return $this->caseP;
    }

    /**
     * Set caseTar
     *
     * @param float $caseTar
     *
     * @return PoidsTarif
     */
    public function setCaseTar($caseTar)
    {
        $this->caseTar = $caseTar;

        return $this;
    }

    /**
     * Get caseTar
     *
     * @return float
     */
    public function getCaseTar()
    {
        return $this->caseTar;
    }

    /**
     * Set commande
     *
     * @param \OC\CommandesBundle\Entity\Commandes $commande
     *
     * @return PoidsTarif
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

    /**
     * Set nameShop
     *
     * @param string $nameShop
     *
     * @return PoidsTarif
     */
    public function setNameShop($nameShop)
    {
        $this->nameShop = $nameShop;

        return $this;
    }

    /**
     * Get nameShop
     *
     * @return string
     */
    public function getNameShop()
    {
        return $this->nameShop;
    }

    /**
     * Set caseMonney
     *
     * @param float $caseMonney
     *
     * @return PoidsTarif
     */
    public function setCaseMonney($caseMonney)
    {
        $this->caseMonney = $caseMonney;

        return $this;
    }

    /**
     * Get caseMonney
     *
     * @return float
     */
    public function getCaseMonney()
    {
        return $this->caseMonney;
    }

    /**
     * Set totMonney
     *
     * @param float $totMonney
     *
     * @return PoidsTarif
     */
    public function setTotMonney($totMonney)
    {
        $this->totMonney = $totMonney;

        return $this;
    }

    /**
     * Get totMonney
     *
     * @return float
     */
    public function getTotMonney()
    {
        return $this->totMonney;
    }

    /**
     * Set tableau
     *
     * @param array $tableau
     *
     * @return PoidsTarif
     */
    public function setTableau($tableau)
    {
        $this->tableau = $tableau;

        return $this;
    }

    /**
     * Get tableau
     *
     * @return array
     */
    public function getTableau()
    {
        return $this->tableau;
    }

    /**
     * Set emailShop
     *
     * @param string $emailShop
     *
     * @return PoidsTarif
     */
    public function setEmailShop($emailShop)
    {
        $this->emailShop = $emailShop;

        return $this;
    }

    /**
     * Get emailShop
     *
     * @return string
     */
    public function getEmailShop()
    {
        return $this->emailShop;
    }


    /**
     * Set livraison
     *
     * @param array $livraison
     *
     * @return PoidsTarif
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return array
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set facturation
     *
     * @param array $facturation
     *
     * @return PoidsTarif
     */
    public function setFacturation($facturation)
    {
        $this->facturation = $facturation;

        return $this;
    }

    /**
     * Get facturation
     *
     * @return array
     */
    public function getFacturation()
    {
        return $this->facturation;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return PoidsTarif
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PoidsTarif
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
