<?php
// src/OC/PlatformBundle/Form/AdvertEditType.php

namespace OC\OnlineCvBundle\Form;

use OC\OnlineCvBundle\Entity\Loisirs;
use OC\OnlineCvBundle\Entity\TheResume;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TheResumeEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
   
  }

  public function getParent()
  {
    return TheResumeType::class;
  }
}
