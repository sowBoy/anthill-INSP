<?php

namespace OC\PubBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use OC\PlatformBundle\Validator\Antiflood;
// On rajoute ce use pour la contrainte :
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
// N'oubliez pas de rajouter ce « use », il définit le namespace pour les annotations de validation
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Banniere
 *
 * @ORM\Table(name="banniere")
 * @ORM\Entity(repositoryClass="OC\PubBundle\Repository\BanniereRepository")
 */
class Banniere
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;
	
	/**
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid = false;
	
	/**
     * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User", inversedBy="banniLarge")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
	
	/**
     * @ORM\OneToOne(targetEntity="ImageBan", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $image;
	
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
     * @return Banniere
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
     * Set lien
     *
     * @param string $lien
     *
     * @return Banniere
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return Banniere
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
     * Set user
     *
     * @param \OC\UserBundle\Entity\User $user
     *
     * @return Banniere
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
     * Set image
     *
     * @param \OC\PubBundle\Entity\ImageBan $image
     *
     * @return Banniere
     */
    public function setImage(\OC\PubBundle\Entity\ImageBan $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \OC\PubBundle\Entity\ImageBan
     */
    public function getImage()
    {
        return $this->image;
    }
}
