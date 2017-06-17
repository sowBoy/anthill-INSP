<?php

namespace OC\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Table(name="oc_user")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  
    /**
     * One User has Many Advert.
     * @ORM\OneToMany(targetEntity="OC\PlatformBundle\Entity\Advert", mappedBy="user")
     */
    private $advert;
	
	/**
     * 
     * @ORM\OneToMany(targetEntity="OC\AnnonceBundle\Entity\Annonce", mappedBy="user")
     */
    private $annonces;
	
	/**
     * 
     * @ORM\OneToMany(targetEntity="OC\PubBundle\Entity\Banniere", mappedBy="user")
     */
    private $banniHori;
	
	/**
     * 
     * @ORM\OneToMany(targetEntity="OC\PubBundle\Entity\BanniLarge", mappedBy="user")
     */
    private $banniLarge;
	
	/**
     * @ORM\OneToMany(targetEntity="OC\CommandesBundle\Entity\Commandes", mappedBy="user")
     */
    private $commandes;
	
	/**
     * @ORM\OneToMany(targetEntity="OC\AdressUtilisaBundle\Entity\Adresse", mappedBy="user")
     */
    private $adresses;

	/**
     * One User has Many TheResume.
     * @ORM\OneToMany(targetEntity="OC\OnlineCvBundle\Entity\TheResume", mappedBy="user")
     */
    private $theResume;
	
	/**
     * One User has Many Application.
     * @ORM\OneToMany(targetEntity="OC\PlatformBundle\Entity\Application", mappedBy="user")
     */
    private $applications;
	
	/**
     * One User has One Boutique.
     * @ORM\OneToOne(targetEntity="OC\BoutiqueBundle\Entity\Boutique", mappedBy="user")
     */
    private $boutique;
	
	/**
     * One User has One Boutique.
     * @ORM\OneToOne(targetEntity="OC\BoutiqueBundle\Entity\Demande", mappedBy="user")
     */
    private $demande;
	
    /**
     * Add advert
     *
     * @param \OC\PlatformBundle\Entity\Advert $advert
     *
     * @return User
     */
    public function addAdvert(\OC\PlatformBundle\Entity\Advert $advert)
    {
        $this->advert[] = $advert;

        return $this;
    }

    /**
     * Remove advert
     *
     * @param \OC\PlatformBundle\Entity\Advert $advert
     */
    public function removeAdvert(\OC\PlatformBundle\Entity\Advert $advert)
    {
        $this->advert->removeElement($advert);
    }

    /**
     * Get advert
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Add application
     *
     * @param \OC\PlatformBundle\Entity\Application $application
     *
     * @return User
     */
    public function addApplication(\OC\PlatformBundle\Entity\Application $application)
    {
        $this->applications[] = $application;

        return $this;
    }

    /**
     * Remove application
     *
     * @param \OC\PlatformBundle\Entity\Application $application
     */
    public function removeApplication(\OC\PlatformBundle\Entity\Application $application)
    {
        $this->applications->removeElement($application);
    }

    /**
     * Get applications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplications()
    {
        return $this->applications;
    }

    /**
     * Add theResume
     *
     * @param \OC\OnlineCvBundle\Entity\TheResume $theResume
     *
     * @return User
     */
    public function addTheResume(\OC\OnlineCvBundle\Entity\TheResume $theResume)
    {
        $this->theResume[] = $theResume;

        return $this;
    }

    /**
     * Remove theResume
     *
     * @param \OC\OnlineCvBundle\Entity\TheResume $theResume
     */
    public function removeTheResume(\OC\OnlineCvBundle\Entity\TheResume $theResume)
    {
        $this->theResume->removeElement($theResume);
    }

    /**
     * Get theResume
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTheResume()
    {
        return $this->theResume;
    }

    /**
     * Set boutique
     *
     * @param \OC\BoutiqueBundle\Entity\Boutique $boutique
     *
     * @return User
     */
    public function setBoutique(\OC\BoutiqueBundle\Entity\Boutique $boutique = null)
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
     * Add commande
     *
     * @param \OC\CommandesBundle\Entity\Commandes $commande
     *
     * @return User
     */
    public function addCommande(\OC\CommandesBundle\Entity\Commandes $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \OC\CommandesBundle\Entity\Commandes $commande
     */
    public function removeCommande(\OC\CommandesBundle\Entity\Commandes $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adress
     *
     * @param \OC\AdressUtilisaBundle\Entity\Adresse $adress
     *
     * @return User
     */
    public function addAdress(\OC\AdressUtilisaBundle\Entity\Adresse $adress)
    {
        $this->adresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \OC\AdressUtilisaBundle\Entity\Adresse $adress
     */
    public function removeAdress(\OC\AdressUtilisaBundle\Entity\Adresse $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * Add annonce
     *
     * @param \OC\AnnonceBundle\Entity\Annonce $annonce
     *
     * @return User
     */
    public function addAnnonce(\OC\AnnonceBundle\Entity\Annonce $annonce)
    {
        $this->annonces[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \OC\AnnonceBundle\Entity\Annonce $annonce
     */
    public function removeAnnonce(\OC\AnnonceBundle\Entity\Annonce $annonce)
    {
        $this->annonces->removeElement($annonce);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * Add banniHori
     *
     * @param \OC\PubBundle\Entity\Banniere $banniHori
     *
     * @return User
     */
    public function addBanniHori(\OC\PubBundle\Entity\Banniere $banniHori)
    {
        $this->banniHori[] = $banniHori;

        return $this;
    }

    /**
     * Remove banniHori
     *
     * @param \OC\PubBundle\Entity\Banniere $banniHori
     */
    public function removeBanniHori(\OC\PubBundle\Entity\Banniere $banniHori)
    {
        $this->banniHori->removeElement($banniHori);
    }

    /**
     * Get banniHori
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBanniHori()
    {
        return $this->banniHori;
    }

    /**
     * Add banniLarge
     *
     * @param \OC\PubBundle\Entity\BanniLarge $banniLarge
     *
     * @return User
     */
    public function addBanniLarge(\OC\PubBundle\Entity\BanniLarge $banniLarge)
    {
        $this->banniLarge[] = $banniLarge;

        return $this;
    }

    /**
     * Remove banniLarge
     *
     * @param \OC\PubBundle\Entity\BanniLarge $banniLarge
     */
    public function removeBanniLarge(\OC\PubBundle\Entity\BanniLarge $banniLarge)
    {
        $this->banniLarge->removeElement($banniLarge);
    }

    /**
     * Get banniLarge
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBanniLarge()
    {
        return $this->banniLarge;
    }

    /**
     * Set demande
     *
     * @param \OC\BoutiqueBundle\Entity\Demande $demande
     *
     * @return User
     */
    public function setDemande(\OC\BoutiqueBundle\Entity\Demande $demande = null)
    {
        $this->demande = $demande;

        return $this;
    }

    /**
     * Get demande
     *
     * @return \OC\BoutiqueBundle\Entity\Demande
     */
    public function getDemande()
    {
        return $this->demande;
    }
}
