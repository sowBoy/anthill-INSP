<?php

namespace OC\BoutiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TarificationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('val1',     MoneyType::class)
		->add('val2',     MoneyType::class)
		->add('val3',     MoneyType::class)
		->add('val4',     MoneyType::class)
		->add('val5',     MoneyType::class)
		->add('val6',     MoneyType::class)
		->add('val7',     MoneyType::class)
		->add('val8',     MoneyType::class)
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
            'data_class' => 'OC\BoutiqueBundle\Entity\Tarification'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_boutiquebundle_tarification';
    }


}
