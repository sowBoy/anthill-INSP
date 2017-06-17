<?php

namespace OC\CommandesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table(name="commandes")
 * @ORM\Entity(repositoryClass="OC\CommandesBundle\Repository\CommandesRepository")
 */
class Commandes
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
     * @var bool
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;
	
	/**
     * @var int
     *
     * @ORM\Column(name="totTarif", type="float", nullable=true)
     */
    private $totTarif;
	
	/**
     * @var int
     *
     * @ORM\Column(name="totalGlob", type="float", nullable=true)
     */
    private $totalGlob;

    /**
     * @var array
     *
     * @ORM\Column(name="commande", type="array")
     */
    private $commande;
	
	/**
     * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;
	
	/**
     * @ORM\OneToMany(targetEntity="Annexe", mappedBy="commande", cascade={"persist"})
     */
    private $annexes;
	
	/**
     * @ORM\OneToMany(targetEntity="CalculTva", mappedBy="commande", cascade={"persist"})
     */
    private $lesTvas;
	
	/**
     * @ORM\OneToMany(targetEntity="PoidsTarif", mappedBy="commande", cascade={"persist"})
     */
    private $poidsTarifs;
	
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
     * Set valider
     *
     * @param boolean $valider
     *
     * @return Commandes
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return bool
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commandes
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

    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return Commandes
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set user
     *
     * @param \OC\UserBundle\Entity\User $user
     *
     * @return Commandes
     */
    public function setUser(\OC\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \OC\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
	
   
    /**
     * Set commande
     *
     * @param array $commande
     *
     * @return Commandes
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return array
     */
    public function getCommande()
    {
        return $this->commande;
    }
    
    /**
     * Add annex
     *
     * @param \OC\CommandesBundle\Entity\Annexe $annex
     *
     * @return Commandes
     */
    public function addAnnex(\OC\CommandesBundle\Entity\Annexe $annex)
    {
        $this->annexes[] = $annex;

        return $this;
    }

    /**
     * Remove annex
     *
     * @param \OC\CommandesBundle\Entity\Annexe $annex
     */
    public function removeAnnex(\OC\CommandesBundle\Entity\Annexe $annex)
    {
        $this->annexes->removeElement($annex);
    }

    /**
     * Get annexes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnexes()
    {
        return $this->annexes;
    }

    /**
     * Add poidsTarif
     *
     * @param \OC\CommandesBundle\Entity\PoidsTarif $poidsTarif
     *
     * @return Commandes
     */
    public function addPoidsTarif(\OC\CommandesBundle\Entity\PoidsTarif $poidsTarif)
    {
        $this->poidsTarifs[] = $poidsTarif;

        return $this;
    }

    /**
     * Remove poidsTarif
     *
     * @param \OC\CommandesBundle\Entity\PoidsTarif $poidsTarif
     */
    public function removePoidsTarif(\OC\CommandesBundle\Entity\PoidsTarif $poidsTarif)
    {
        $this->poidsTarifs->removeElement($poidsTarif);
    }

    /**
     * Get poidsTarifs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPoidsTarifs()
    {
        return $this->poidsTarifs;
    }


    /**
     * Set totTarif
     *
     * @param float $totTarif
     *
     * @return Commandes
     */
    public function setTotTarif($totTarif)
    {
        $this->totTarif = $totTarif;

        return $this;
    }

    /**
     * Get totTarif
     *
     * @return float
     */
    public function getTotTarif()
    {
        return $this->totTarif;
    }

    /**
     * Set totalGlob
     *
     * @param float $totalGlob
     *
     * @return Commandes
     */
    public function setTotalGlob($totalGlob)
    {
        $this->totalGlob = $totalGlob;

        return $this;
    }

    /**
     * Get totalGlob
     *
     * @return float
     */
    public function getTotalGlob()
    {
        return $this->totalGlob;
    }


    /**
     * Add lesTva
     *
     * @param \OC\CommandesBundle\Entity\CalculTva $lesTva
     *
     * @return Commandes
     */
    public function addLesTva(\OC\CommandesBundle\Entity\CalculTva $lesTva)
    {
        $this->lesTvas[] = $lesTva;

        return $this;
    }

    /**
     * Remove lesTva
     *
     * @param \OC\CommandesBundle\Entity\CalculTva $lesTva
     */
    public function removeLesTva(\OC\CommandesBundle\Entity\CalculTva $lesTva)
    {
        $this->lesTvas->removeElement($lesTva);
    }

    /**
     * Get lesTvas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesTvas()
    {
        return $this->lesTvas;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->annexes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesTvas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->poidsTarifs = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
