<?php

namespace OC\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use OC\ProductBundle\Form\ProductImageType;
class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('nom',     TextType::class)
		->add('descriptif',     TextareaType::class)
		->add('prix',     MoneyType::class)
		->add('tva',     PercentType::class)
		->add('quantity',     NumberType::class, array(
             'label' => 'Quantité',
        ))
		->add('couleur',     ChoiceType::class, array(
        'choices'  => array(
        'Noir' => '#000000',
        'Blanc' => '#FFFFFF',
		'Bleu' => '#0000FF',
        'Rouge' => '#FF0000',
		'Jaune' => '#FFFF00',
        'Vert' => '#008000',
		'Marron' => '#800000',
        'Violet' => '#800080',
		'Olive' => '#808000',
        'Orange' => '#FFA500',
		'Turquoise' => '#40E0D0',
        'Gris' => '#808080',
		'Gold' => '#FFD700',
        'Golden' => '#DAA520',
		'Indigo' => '#4B0082',
        'Ivoire' => '#FFFFF0',
		'Kaki' => '#F0E68C',
        'Lavande' => '#E6E6FA',
		'Gris clair' => '#D3D3D3',
        'Citron vert' => '#00FF00',
		'Magenta' => '#FF00FF',
        'Navy' => '#000080',
		'Rose' => '#FFC0CB',
        'Rose foncé' => '#FF1493',
		'Vert foncé' => '#006400',
        'Bleu foncé' => '#00008B',
		'Bleu nuit' => '#191970',
        'Cyan' => '#00FFFF',
		'Rouge foncé' => '#8B0000',
        'Selle Marron' => '#8B4513',
		'Sarcelle' => '#008080',
        'Terre de sienne' => '#A0522D',
		'Bleu clair' => '#ADD8E6',
        'Vert clair' => '#90EE90',
		'Chartreuse' => '#7FFF00',
        'Peau-rouge' => '#CD5C5C',
        ),
		 'required'    => false
      ))
		->add('taille',     ChoiceType::class, array(
        'choices'  => array(
        'XS' => 'XS',
        'S' => 'S',
		'M' => 'M',
		'L' => 'L',
		'XL' => 'XL',
		'XXL' => 'XXL',
		'XXXL' => 'XXXL',
        ),
		 'required'    => false
      ))
		->add('poids',     TextType::class)
		->add('image',     ProductImageType::class);
		
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\ProductBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_productbundle_product';
    }


}
