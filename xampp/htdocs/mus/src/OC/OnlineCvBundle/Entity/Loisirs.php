<?php

namespace OC\OnlineCvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Loisirs
 *
 * @ORM\Table(name="loisirs")
 * @ORM\Entity(repositoryClass="OC\OnlineCvBundle\Repository\LoisirsRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Loisirs
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
     * @ORM\ManyToOne(targetEntity="OC\OnlineCvBundle\Entity\TheResume", inversedBy="loisirs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $theResume;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Loisirs
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
     * @return Loisirs
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
}
