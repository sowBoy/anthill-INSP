<?php

namespace OC\OnlineCvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Formation
 *@ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="OC\OnlineCvBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="periode", type="string", length=255)
     */
    private $periode;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="ecole", type="string", length=255)
     */
    private $ecole;
	
	/**
     * @ORM\ManyToOne(targetEntity="OC\OnlineCvBundle\Entity\TheResume", inversedBy="formations", cascade={"persist"})
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Formation
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
     * Set theResume
     *
     * @param \OC\OnlineCvBundle\Entity\TheResume $theResume
     *
     * @return Formation
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
     * @return Formation
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

    /**
     * Set ecole
     *
     * @param string $ecole
     *
     * @return Formation
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return string
     */
    public function getEcole()
    {
        return $this->ecole;
    }
}
