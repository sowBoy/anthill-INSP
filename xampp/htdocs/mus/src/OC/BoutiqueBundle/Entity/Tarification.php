<?php

namespace OC\BoutiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarification
 *
 * @ORM\Table(name="tarification")
 * @ORM\Entity(repositoryClass="OC\BoutiqueBundle\Repository\TarificationRepository")
 */
class Tarification
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="val1", type="float")
     */
    private $val1;

    /**
     * @var float
     *
     * @ORM\Column(name="val2", type="float")
     */
    private $val2;

    /**
     * @var float
     *
     * @ORM\Column(name="val3", type="float")
     */
    private $val3;

    /**
     * @var float
     *
     * @ORM\Column(name="val4", type="float")
     */
    private $val4;

    /**
     * @var float
     *
     * @ORM\Column(name="val5", type="float")
     */
    private $val5;

    /**
     * @var float
     *
     * @ORM\Column(name="val6", type="float")
     */
    private $val6;

    /**
     * @var float
     *
     * @ORM\Column(name="val7", type="float")
     */
    private $val7;

    /**
     * @var float
     *
     * @ORM\Column(name="val8", type="float")
     */
    private $val8;

    /**
     * Set val1
     *
     * @param float $val1
     *
     * @return Tarification
     */
    public function setVal1($val1)
    {
        $this->val1 = $val1;

        return $this;
    }

    /**
     * Get val1
     *
     * @return float
     */
    public function getVal1()
    {
        return $this->val1;
    }

    /**
     * Set val2
     *
     * @param float $val2
     *
     * @return Tarification
     */
    public function setVal2($val2)
    {
        $this->val2 = $val2;

        return $this;
    }

    /**
     * Get val2
     *
     * @return float
     */
    public function getVal2()
    {
        return $this->val2;
    }

    /**
     * Set val3
     *
     * @param float $val3
     *
     * @return Tarification
     */
    public function setVal3($val3)
    {
        $this->val3 = $val3;

        return $this;
    }

    /**
     * Get val3
     *
     * @return float
     */
    public function getVal3()
    {
        return $this->val3;
    }

    /**
     * Set val4
     *
     * @param float $val4
     *
     * @return Tarification
     */
    public function setVal4($val4)
    {
        $this->val4 = $val4;

        return $this;
    }

    /**
     * Get val4
     *
     * @return float
     */
    public function getVal4()
    {
        return $this->val4;
    }

    /**
     * Set val5
     *
     * @param float $val5
     *
     * @return Tarification
     */
    public function setVal5($val5)
    {
        $this->val5 = $val5;

        return $this;
    }

    /**
     * Get val5
     *
     * @return float
     */
    public function getVal5()
    {
        return $this->val5;
    }

    /**
     * Set val6
     *
     * @param float $val6
     *
     * @return Tarification
     */
    public function setVal6($val6)
    {
        $this->val6 = $val6;

        return $this;
    }

    /**
     * Get val6
     *
     * @return float
     */
    public function getVal6()
    {
        return $this->val6;
    }

    /**
     * Set val7
     *
     * @param float $val7
     *
     * @return Tarification
     */
    public function setVal7($val7)
    {
        $this->val7 = $val7;

        return $this;
    }

    /**
     * Get val7
     *
     * @return float
     */
    public function getVal7()
    {
        return $this->val7;
    }

    /**
     * Set val8
     *
     * @param float $val8
     *
     * @return Tarification
     */
    public function setVal8($val8)
    {
        $this->val8 = $val8;

        return $this;
    }

    /**
     * Get val8
     *
     * @return float
     */
    public function getVal8()
    {
        return $this->val8;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Tarification
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
}
