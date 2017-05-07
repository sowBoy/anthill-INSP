<?php
// src/OC/PlatformBundle/Form/AdvertType.php

namespace OC\PlatformBundle\Form;

use OC\PlatformBundle\Entity\Advert;
use OC\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;
use OC\PlatformBundle\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
   
    $builder
      ->add('title',     TextType::class)
      ->add('type',     ChoiceType::class, array(
        'choices'  => array(
        'CDI' => 'CDI',
        'CDD' => 'CDD',
		'INTERIM' => 'INTERIM',
		'EMPLOI SAISONNIER' => 'EMPLOI SAISONNIER',
		'STAGE' => 'STAGE',
		'CONTRAT DE PROFESSIONNALISATION' => 'CONTRAT DE PROFESSIONNALISATION',
		'CONTRAT AIDE' => 'CONTRAT AIDE'
		)))
		->add('content',     TextareaType::class)
		->add('entreprise',     TextareaType::class)
		->add('profile',     TextareaType::class)
		->add('localisation',     TextType::class)
		->add('salaire',     MoneyType::class)
		->add('website',   Urltype::class, array(
            'required' => false,
      ))
		->add('image',     ImageType::class)
		->add('save',      SubmitType::class, array(
    'label' => 'Sauvegarder',
));
    

    // On ajoute une fonction qui va écouter un évènement
    $builder->addEventListener(
      FormEvents::PRE_SET_DATA,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
      function(FormEvent $event) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché
        // On récupère notre objet Advert sous-jacent
        $advert = $event->getData();

        // Cette condition est importante, on en reparle plus loin
        if (null === $advert) {
          return; // On sort de la fonction sans rien faire lorsque $advert vaut null
        }

        // Si l'annonce n'est pas publiée, ou si elle n'existe pas encore en base (id est null)
        if (!$advert->getPublished() || null === $advert->getId()) {
          // Alors on ajoute le champ published
          $event->getForm()->add('published', CheckboxType::class, array('required' => false));
        } else {
          // Sinon, on le supprime
          $event->getForm()->remove('published');
        }
      }
    );
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'OC\PlatformBundle\Entity\Advert'
    ));
  }
}
