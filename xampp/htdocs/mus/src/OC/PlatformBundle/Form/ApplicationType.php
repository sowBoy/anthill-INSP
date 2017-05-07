<?php
// src/OC/PlatformBundle/Form/AdvertType.php

namespace OC\PlatformBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApplicationType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    // Arbitrairement, on récupère toutes les catégories qui commencent par "D"
   

    $builder
      ->add('date',      DateTimeType::class)
	  ->add('resume',     ResumeType::class)
      ->add('content',   CkeditorType::class)
     
    
      ->add('save',      SubmitType::class, array(
    'label' => 'Sauvegarder',
))
    ;
  }

  public function getName()
    {       
        return 'this_application';
    }
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'OC\PlatformBundle\Entity\Application'
    ));
  }
}
