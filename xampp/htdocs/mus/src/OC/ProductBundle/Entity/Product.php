<?php

namespace OC\ProductBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use OC\PlatformBundle\Validator\Antiflood;
// On rajoute ce use pour la contrainte :
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
// N'oubliez pas de rajouter ce « use », il définit le namespace pour les annotations de validation
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="OC\ProductBundle\Repository\ProductRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text")
	 * @Assert\Length(
     *      min = 250,
     *      max = 3000,
     *      minMessage = "Le text est trop court",
     *      maxMessage = "Le text est trop long"
     * )
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;
	
	/**
     * @var string
     *
     * @ORM\Column(name="tva", type="float", length=25)
     */
    private $tva;
	
	/**
     * @ORM\ManyToOne(targetEntity="OC\BoutiqueBundle\Entity\Boutique", inversedBy="produits", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $boutique;
	
	/**
     * @ORM\OneToOne(targetEntity="OC\ProductBundle\Entity\ProductImage", cascade={"persist", "remove"})
     * @Assert\Valid()
    */
    private $image;
		
	/**
     * @var string
     *
     * @ORM\Column(name="quantity", type="integer", length=25)
     */
    private $quantity;
	
	/**
     * @var string
     *
     * @ORM\Column(name="poids", type="float", length=25)
	 * @Assert\Range(
     *      min = 0.02,
     *      max = 5,
     *      minMessage = "Valeur trop petite",
     *      maxMessage = "Valeur trop grande"
     * )
     */
    private $poids;
	
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image
     *
     * @param \OC\ProductBundle\Entity\ProductImage $image
     *
     * @return Product
     */
    public function setImage(\OC\ProductBundle\Entity\ProductImage $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \OC\ProductBundle\Entity\ProductImage
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set boutique
     *
     * @param \OC\BoutiqueBundle\Entity\Boutique $boutique
     *
     * @return Product
     */
    public function setBoutique(\OC\BoutiqueBundle\Entity\Boutique $boutique)
    {
        $this->boutique = $boutique;

        return $this;
    }

    /**
     * Get boutique
     *
     * @return \OC\BoutiqueBundle\Entity\Boutique
     */
    public function getBoutique()
    {
        return $this->boutique;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Product
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Product
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Product
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set tva
     *
     * @param float $tva
     *
     * @return Product
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }
    
    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return Product
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return Product
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
     * @return Product
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
}
