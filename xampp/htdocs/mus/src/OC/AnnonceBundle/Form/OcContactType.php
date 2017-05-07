<?php

namespace OC\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class OcContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',     EmailType::class)
            ->add('objet',     TextType::class)
            ->add('message',     TextareaType::class)
			->add('save',      SubmitType::class, array(
    'label' => 'Sauvegarder',
));
    }

    public function getName()
    {
        return 'contact';
    }
}