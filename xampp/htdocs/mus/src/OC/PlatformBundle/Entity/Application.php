<?php
// src/OC/PlatformBundle/Entity/Application.php

namespace OC\PlatformBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Table(name="oc_application")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\ApplicationRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Application
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="content", type="text")
   */
  private $content;

  /**
   * @ORM\Column(name="date", type="datetime")
   */
  private $date;

  /**
   * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Advert", inversedBy="applications", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
  private $advert;
  
  /**
   * @ORM\OneToOne(targetEntity="OC\PlatformBundle\Entity\Resume", cascade={"persist", "remove"})
   * @Assert\Valid()
   */
  private $resume;
  
   /**
   * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User", inversedBy="applications")
   * @ORM\JoinColumn(nullable=false)
   */
  private $user;

  public function __construct()
  {
    $this->date = new \Datetime();
  }

  /**
   * 
   */
  public function increase()
  {
    $this->getAdvert()->increaseApplication();
  }

  /**
   * 
   */
  public function decrease()
  {
    $this->getAdvert()->decreaseApplication();
  }

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }

  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }

  /**
   * @param \Datetime $date
   */
  public function setDate(\Datetime $date)
  {
    $this->date = $date;
  }

  /**
   * @return \Datetime
   */
  public function getDate()
  {
    return $this->date;
  }

    /**
     * Set resume
     *
     * @param \OC\PlatformBundle\Entity\Resume $resume
     *
     * @return Application
     */
    public function setResume(\OC\PlatformBundle\Entity\Resume $resume = null)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return \OC\PlatformBundle\Entity\Resume
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set user
     *
     * @param \OC\UserBundle\Entity\User $user
     *
     * @return Application
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
     * Set advert
     *
     * @param \OC\PlatformBundle\Entity\Advert $advert
     *
     * @return Application
     */
    public function setAdvert(\OC\PlatformBundle\Entity\Advert $advert)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \OC\PlatformBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }
}
