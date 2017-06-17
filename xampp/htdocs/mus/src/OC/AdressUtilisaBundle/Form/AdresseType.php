<?php

namespace OC\AdressUtilisaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AdresseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom',     TextType::class)
		->add('prenom',     TextType::class)
		 ->add('pays',     ChoiceType::class, array(
        'choices'  => array(
        'France' => 'France'
		)))
		->add('ville',     TextType::class)
		->add('telephone',     TextType::class)
		->add('adresse',     TextType::class)
		->add('cp',     TextType::class)
		->add('save',      SubmitType::class, array(
    'label' => 'Sauvegarder',
));
		
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\AdressUtilisaBundle\Entity\Adresse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_adressUtilisabundle_adresse';
    }


}
