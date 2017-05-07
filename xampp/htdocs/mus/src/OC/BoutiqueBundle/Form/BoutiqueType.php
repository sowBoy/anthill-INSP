<?php

namespace OC\BoutiqueBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use OC\ProductBundle\Form\ProductType;
class BoutiqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('name',     TextType::class)
		->add('description',     TextareaType::class)
		->add('image',     BoutiqueImageType::class, array(
    'label' => 'Image representative',
))
		  ->add('produits', CollectionType::class, array(
        'entry_type'   => ProductType::class,
        'allow_add'    => true,
        'allow_delete' => true

      ))
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
            'data_class' => 'OC\BoutiqueBundle\Entity\Boutique'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_boutiquebundle_boutique';
    }


}
