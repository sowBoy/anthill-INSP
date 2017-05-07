<?php

namespace OC\OnlineCvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Competence
 *
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="OC\OnlineCvBundle\Repository\CompetenceRepository")
 */
class Competence
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
     * @ORM\ManyToOne(targetEntity="OC\OnlineCvBundle\Entity\TheResume", inversedBy="competences")
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
     * @return Competence
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
     * @return Competence
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
