<?php

namespace OC\BoutiqueBundle\Entity;


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
 * Boutique
 *
 * @ORM\Table(name="boutique")
 * @ORM\Entity(repositoryClass="OC\BoutiqueBundle\Repository\BoutiqueRepository")
 */
class Boutique
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
     * @ORM\Column(name="name", type="string", length=120, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

	/**
     * @ORM\OneToOne(targetEntity="OC\BoutiqueBundle\Entity\BoutiqueImage", cascade={"persist", "remove"})
     * 
     */
   private $image;
	
	/**
     * One Boutique has Many Product.
     * @ORM\OneToMany(targetEntity="OC\ProductBundle\Entity\Product", mappedBy="boutique", cascade={"persist", "remove"})
     */
    private $produits;
	
	/**
     * One Boutique has One User.
     * @ORM\OneToOne(targetEntity="OC\UserBundle\Entity\User", inversedBy="boutique")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;
	
	
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
     * Set name
     *
     * @param string $name
     *
     * @return Boutique
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Boutique
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
    /**
     * Set user
     *
     * @param \OC\UserBundle\Entity\User $user
     *
     * @return Boutique
     */
    public function setUser(\OC\UserBundle\Entity\User $user)
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
     * Add produit
     *
     * @param \OC\ProductBundle\Entity\Product $produit
     *
     * @return Boutique
     */
    public function addProduit(\OC\ProductBundle\Entity\Product $produit)
    {
        $this->produits[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \OC\ProductBundle\Entity\Product $produit
     */
    public function removeProduit(\OC\ProductBundle\Entity\Product $produit)
    {
        $this->produits->removeElement($produit);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set image
     *
     * @param \OC\BoutiqueBundle\Entity\BoutiqueImage $image
     *
     * @return Boutique
     */
    public function setImage(\OC\BoutiqueBundle\Entity\BoutiqueImage $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \OC\BoutiqueBundle\Entity\BoutiqueImage
     */
    public function getImage()
    {
        return $this->image;
    }
}
