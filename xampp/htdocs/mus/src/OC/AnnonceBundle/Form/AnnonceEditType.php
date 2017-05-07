<?php
// src/OC/PlatformBundle/Form/AdvertEditType.php

namespace OC\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AnnonceEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    
  }

  public function getParent()
  {
    return AnnonceType::class;
  }
}
