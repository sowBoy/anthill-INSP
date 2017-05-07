<?php

namespace OC\OnlineCvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Experiences
 *
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="experiences")
 * @ORM\Entity(repositoryClass="OC\OnlineCvBundle\Repository\ExperiencesRepository")
 */
class Experiences
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
	
	/**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=255)
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text")
     */
    private $details;

    /**
     * @ORM\ManyToOne(targetEntity="OC\OnlineCvBundle\Entity\TheResume", inversedBy="experiences")
     * @ORM\JoinColumn(nullable=false)
     */
    private $theResume;
	

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Experiences
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Experiences
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set theResume
     *
     * @param \OC\OnlineCvBundle\Entity\TheResume $theResume
     *
     * @return Experiences
     */
    public function setTheResume(\OC\OnlineCvBundle\Entity\TheResume $theResume)
    {
        $this->theResume = $theResume;

        return $this;
    }

    /**
     * Get theResume
     *
     * @return \OC\OnlineCvBundle\Entity\TheResume
     */
    public function getTheResume()
    {
        return $this->theResume;
    }

    /**
     * Set periode
     *
     * @param string $periode
     *
     * @return Experiences
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}
