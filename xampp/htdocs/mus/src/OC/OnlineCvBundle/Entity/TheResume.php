<?php

namespace OC\OnlineCvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TheResume
 *
 * @ORM\Table(name="the_resume")
 * @ORM\Entity(repositoryClass="OC\OnlineCvBundle\Repository\TheResumeRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class TheResume
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;
	
	/**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;
	
	/**
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid = false;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;
	
	/**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
     private $adress;
	 
	 /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=255)
     */
    private $town;
	
	/**
     * @var int
     *
     * @ORM\Column(name="zip", type="integer")
     */
    private $zip;
	
	/**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="text")
     */
    private $profile;


	/**
     * One TheResume has Many Formation.
     * @ORM\OneToMany(targetEntity="OC\OnlineCvBundle\Entity\Formation", mappedBy="theResume", cascade={"persist", "remove"})
     */
    private $formations;
	
	/**
     * One TheResume has Many Experiences.
     * @ORM\OneToMany(targetEntity="OC\OnlineCvBundle\Entity\Experiences", mappedBy="theResume", cascade={"persist", "remove"})
     */
    private $experiences;
	
	/**
     * One TheResume has Many Langues.
     * @ORM\OneToMany(targetEntity="OC\OnlineCvBundle\Entity\Langues", mappedBy="theResume", cascade={"persist", "remove"})
     */
    private $langues;
	
	/**
     * One TheResume has Many Competence.
     * @ORM\OneToMany(targetEntity="OC\OnlineCvBundle\Entity\Competence", mappedBy="theResume", cascade={"persist", "remove"})
     */
    private $competences;
	
	/**
     * One TheResume has Many Loisirs.
     * @ORM\OneToMany(targetEntity="OC\OnlineCvBundle\Entity\Loisirs", mappedBy="theResume", cascade={"persist", "remove"})
     */
    private $loisirs;
	
	/**
     * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User", inversedBy="theResume")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
	
	/**
     * @ORM\Column(name="published", type="boolean")
     */
    private $published = true;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * 
     */
    private $date;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		$this->date         = new \Datetime();
        $this->formations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->experiences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->langues = new \Doctrine\Common\Collections\ArrayCollection();
        $this->competences = new \Doctrine\Common\Collections\ArrayCollection();
		$this->loisirs = new \Doctrine\Common\Collections\ArrayCollection();
    }
	
	/**
     * @param \DateTime $updatedAt
     */
	  public function setUpdatedAt(\Datetime $updatedAt = null)
	  {
		  $this->updatedAt = $updatedAt;
	  }

    /**
     * @return \DateTime
     */
	  public function getUpdatedAt()
	  {
		  return $this->updatedAt;
	  }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return TheResume
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return TheResume
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return TheResume
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return TheResume
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return TheResume
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set profile
     *
     * @param string $profile
     *
     * @return TheResume
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    
    /**
     * Set user
     *
     * @param \OC\UserBundle\Entity\User $user
     *
     * @return TheResume
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
     * Set published
     *
     * @param boolean $published
     *
     * @return TheResume
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TheResume
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
     * Set objet
     *
     * @param string $objet
     *
     * @return TheResume
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Add loisir
     *
     * @param \OC\OnlineCvBundle\Entity\Loisirs $loisir
     *
     * @return TheResume
     */
    public function addLoisir(\OC\OnlineCvBundle\Entity\Loisirs $loisir)
    {
        $this->loisirs[] = $loisir;

        return $this;
    }

    /**
     * Remove loisir
     *
     * @param \OC\OnlineCvBundle\Entity\Loisirs $loisir
     */
    public function removeLoisir(\OC\OnlineCvBundle\Entity\Loisirs $loisir)
    {
        $this->loisirs->removeElement($loisir);
    }

    /**
     * Get loisirs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLoisirs()
    {
        return $this->loisirs;
    }

    /**
     * Add formation
     *
     * @param \OC\OnlineCvBundle\Entity\Formation $formation
     *
     * @return TheResume
     */
    public function addFormation(\OC\OnlineCvBundle\Entity\Formation $formation)
    {
        $this->formations[] = $formation;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \OC\OnlineCvBundle\Entity\Formation $formation
     */
    public function removeFormation(\OC\OnlineCvBundle\Entity\Formation $formation)
    {
        $this->formations->removeElement($formation);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * Add langue
     *
     * @param \OC\OnlineCvBundle\Entity\Langues $langue
     *
     * @return TheResume
     */
    public function addLangue(\OC\OnlineCvBundle\Entity\Langues $langue)
    {
        $this->langues[] = $langue;

        return $this;
    }

    /**
     * Remove langue
     *
     * @param \OC\OnlineCvBundle\Entity\Langues $langue
     */
    public function removeLangue(\OC\OnlineCvBundle\Entity\Langues $langue)
    {
        $this->langues->removeElement($langue);
    }

    /**
     * Get langues
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLangues()
    {
        return $this->langues;
    }

    /**
     * Add competence
     *
     * @param \OC\OnlineCvBundle\Entity\Competence $competence
     *
     * @return TheResume
     */
    public function addCompetence(\OC\OnlineCvBundle\Entity\Competence $competence)
    {
        $this->competences[] = $competence;

        return $this;
    }

    /**
     * Remove competence
     *
     * @param \OC\OnlineCvBundle\Entity\Competence $competence
     */
    public function removeCompetence(\OC\OnlineCvBundle\Entity\Competence $competence)
    {
        $this->competences->removeElement($competence);
    }

    /**
     * Get competences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Add experience
     *
     * @param \OC\OnlineCvBundle\Entity\Experiences $experience
     *
     * @return TheResume
     */
    public function addExperience(\OC\OnlineCvBundle\Entity\Experiences $experience)
    {
        $this->experiences[] = $experience;

        return $this;
    }

    /**
     * Remove experience
     *
     * @param \OC\OnlineCvBundle\Entity\Experiences $experience
     */
    public function removeExperience(\OC\OnlineCvBundle\Entity\Experiences $experience)
    {
        $this->experiences->removeElement($experience);
    }

    /**
     * Get experiences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return TheResume
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return TheResume
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set zip
     *
     * @param integer $zip
     *
     * @return TheResume
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return TheResume
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return TheResume
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
}
