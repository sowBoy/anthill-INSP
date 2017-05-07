<?php

namespace OC\OnlineCvBundle\Form;

use OC\OnlineCvBundle\Entity\TheResume;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class TheResumeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('objet',     TextType::class)
		->add('firstname',     TextType::class)
		->add('lastname',     TextType::class)
		->add('adress',     TextType::class)
		->add('town',     TextType::class)
		->add('zip',     NumberType::class)
		->add('country',     TextType::class)
		->add('email',   EmailType::class)
		->add('phone',    NumberType::class)
		->add('website',   Urltype::class, array(
            'required' => false,
      ))
	  ->add('profile',    TextareaType::class)
	  ->add('competences', CollectionType::class, array(
        'entry_type'   => CompetenceType::class,
        'allow_add'    => true,
        'allow_delete' => true

      ))
	    ->add('formations', CollectionType::class, array(
        'entry_type'   => FormationType::class,
        'allow_add'    => true,
        'allow_delete' => true

      ))
	  ->add('experiences', CollectionType::class, array(
        'entry_type'   => ExperiencesType::class,
        'allow_add'    => true,
        'allow_delete' => true

      ))
	  
	  ->add('langues', CollectionType::class, array(
        'entry_type'   => LanguesType::class,
        'allow_add'    => true,
        'allow_delete' => true

      ))
	  
	  ->add('loisirs', CollectionType::class, array(
        'entry_type'   => LoisirsType::class,
        'allow_add'    => true,
        'allow_delete' => true

      ))
		->add('save',      SubmitType::class, array(
    'label' => 'Sauvegarder',
))
    ;

    // On ajoute une fonction qui va écouter un évènement
    $builder->addEventListener(
      FormEvents::PRE_SET_DATA,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
      function(FormEvent $event) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché
        // On récupère notre objet Advert sous-jacent
        $theResume = $event->getData();

        // Cette condition est importante, on en reparle plus loin
        if (null === $theResume) {
          return; // On sort de la fonction sans rien faire lorsque $advert vaut null
        }

        // Si l'annonce n'est pas publiée, ou si elle n'existe pas encore en base (id est null)
        if (!$theResume->getPublished() || null === $theResume->getId()) {
          // Alors on ajoute le champ published
          $event->getForm()->add('published', CheckboxType::class, array('required' => false));
        } else {
          // Sinon, on le supprime
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
            'data_class' => 'OC\OnlineCvBundle\Entity\TheResume'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_onlinecvbundle_theresume';
    }


}
