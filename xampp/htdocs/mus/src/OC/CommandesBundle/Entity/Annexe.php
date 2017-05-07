<?php

namespace OC\CommandesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annexe
 *
 * @ORM\Table(name="annexe")
 * @ORM\Entity(repositoryClass="OC\CommandesBundle\Repository\AnnexeRepository")
 */
class Annexe
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
     * @var int
     *
     * @ORM\Column(name="casePoids", type="float")
     */
    private $casePoids;
	
	/**
     * @var int
     *
     * @ORM\Column(name="caseIdB", type="integer")
     */
    private $caseIdB;
	
	/**
     * @var int
     *
     * @ORM\Column(name="casePrix", type="float")
     */
    private $casePrix;
	
	/**
     * @var int
     *
     * @ORM\Column(name="caseTva", type="float")
     */
    private $caseTva;
	
	/**
     * @var int
     *
     * @ORM\Column(name="valeurTva", type="float")
     */
    private $valeurTva;
	
	/**
     * @var int
     *
     * @ORM\Column(name="caseQte", type="integer")
     */
    private $caseQte;
	
		/**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=25, nullable=true)
     */
    private $taille;
	
	/**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=25, nullable=true)
     */
    private $couleur;
	
	/**
     * @var int
     *
     * @ORM\Column(name="caseName", type="string", length=255)
     */
    private $caseName;
	
	/**
     * @ORM\ManyToOne(targetEntity="Commandes", inversedBy="annexes", cascade={"persist"})
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
     * Set casePoids
     *
     * @param float $casePoids
     *
     * @return Annexe
     */
    public function setCasePoids($casePoids)
    {
        $this->casePoids = $casePoids;

        return $this;
    }

    /**
     * Get casePoids
     *
     * @return float
     */
    public function getCasePoids()
    {
        return $this->casePoids;
    }

    /**
     * Set caseIdB
     *
     * @param integer $caseIdB
     *
     * @return Annexe
     */
    public function setCaseIdB($caseIdB)
    {
        $this->caseIdB = $caseIdB;

        return $this;
    }

    /**
     * Get caseIdB
     *
     * @return integer
     */
    public function getCaseIdB()
    {
        return $this->caseIdB;
    }

    /**
     * Set commande
     *
     * @param \OC\CommandesBundle\Entity\Commandes $commande
     *
     * @return Annexe
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
     * Set casePrix
     *
     * @param float $casePrix
     *
     * @return Annexe
     */
    public function setCasePrix($casePrix)
    {
        $this->casePrix = $casePrix;

        return $this;
    }

    /**
     * Get casePrix
     *
     * @return float
     */
    public function getCasePrix()
    {
        return $this->casePrix;
    }

    /**
     * Set caseQte
     *
     * @param integer $caseQte
     *
     * @return Annexe
     */
    public function setCaseQte($caseQte)
    {
        $this->caseQte = $caseQte;

        return $this;
    }

    /**
     * Get caseQte
     *
     * @return integer
     */
    public function getCaseQte()
    {
        return $this->caseQte;
    }

    /**
     * Set caseName
     *
     * @param string $caseName
     *
     * @return Annexe
     */
    public function setCaseName($caseName)
    {
        $this->caseName = $caseName;

        return $this;
    }

    /**
     * Get caseName
     *
     * @return string
     */
    public function getCaseName()
    {
        return $this->caseName;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return Annexe
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Annexe
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set caseTva
     *
     * @param float $caseTva
     *
     * @return Annexe
     */
    public function setCaseTva($caseTva)
    {
        $this->caseTva = $caseTva;

        return $this;
    }

    /**
     * Get caseTva
     *
     * @return float
     */
    public function getCaseTva()
    {
        return $this->caseTva;
    }

    /**
     * Set valeurTva
     *
     * @param float $valeurTva
     *
     * @return Annexe
     */
    public function setValeurTva($valeurTva)
    {
        $this->valeurTva = $valeurTva;

        return $this;
    }

    /**
     * Get valeurTva
     *
     * @return float
     */
    public function getValeurTva()
    {
        return $this->valeurTva;
    }
}
