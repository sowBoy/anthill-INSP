<?php

namespace OC\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('title',     TextType::class)
		->add('categorie',     ChoiceType::class, array(
        'choices'  => array(
        'Offre' => 'Offre',
        'Demande' => 'Demande',
		'Don' => 'Don'
		)))
	    ->add('website',   Urltype::class, array(
            'required' => false,
      ))
		->add('content',     TextareaType::class)
		->add('prix',     MoneyType::class, array(
            'required' => false,
      ))
		->add('localisation',     TextType::class, array(
    'data' => 'Exemple:Cergy en France',
))
		->add('phone',   NumberType::class, array(
            'required' => false,
      ))
		->add('image',      AnnonceImageType::class)
		->add('galeries', CollectionType::class, array(
        'entry_type'   => GalerieType::class,
        'allow_add'    => true,
        'allow_delete' => true,
		'required' => false,

      ))
		->add('save',      SubmitType::class, array(
    'label' => 'Sauvegarder',
));
    
    $builder->addEventListener(
      FormEvents::PRE_SET_DATA,    
      function(FormEvent $event) { 
       
        $annonce = $event->getData();

        if (null === $annonce) {
          return; 
        }

        if (!$annonce->getPublished() || null === $annonce->getId()) {
          
          $event->getForm()->add('published', CheckboxType::class, array('required' => false));
        } else {
         
          $event->getForm()->remove('published');
        }
      }
    );
		
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\AnnonceBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_annoncebundle_annonce';
    }


}
