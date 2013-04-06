<?php

namespace Wixair\ReparacionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lexik\Bundle\FormFilterBundle\Filter\FilterOperands;

class ReparacionFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', 'filter_text', array(
            'condition_pattern' => FilterOperands::STRING_BOTH,
        ));
        $builder->add('numero_serie', 'filter_text');
        $builder->add('fecha_entrada', 'filter_date_range',array(
                'left_date' => array('widget' => 'choice'),
                'right_date' => array('widget' => 'choice'),
            ));
        $builder->add('fecha_salida', 'filter_date_range',array(
                'left_date' => array('widget' => 'choice'),
                'right_date' => array('widget' => 'choice'),
            ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection'   => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

    public function getName()
    {
        return 'wixair_reparacionesbundle_reparacionfiltertype';
    }
}
