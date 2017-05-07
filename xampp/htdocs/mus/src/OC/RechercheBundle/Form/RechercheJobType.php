<?php
namespace OC\RechercheBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class RechercheJobType extends AbstractType
{
    public function buildForm(FormbuilderInterface $builder, array $option)
    {
        $builder->add('recherche','text', array('label' => false,
                                                'attr' => array('class' => 'input-medium search-query')));
    }
    
    public function getName()
    {
        return 'oc_recherchebundle_recherchejob';
    }
}