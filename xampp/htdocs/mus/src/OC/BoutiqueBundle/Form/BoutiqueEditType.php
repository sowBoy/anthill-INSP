<?php
// src/OC/PlatformBundle/Form/AdvertEditType.php

namespace OC\BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BoutiqueEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {

  }

  public function getParent()
  {
    return BoutiqueType::class;
  }
}
