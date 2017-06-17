<?php
namespace OC\RechercheBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class RechercheCvType extends AbstractType
{
    public function buildForm(FormbuilderInterface $builder, array $option)
    {
        $builder->add('recherche',     TextType::class, array('label' => false,
                                                'attr' => array('class' => 'input-medium search-query')));
    }
    
    public function getName()
    {
        return 'oc_recherchebundle_recherchecv';
    }
}