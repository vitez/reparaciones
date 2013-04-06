<?php

namespace Wixair\ReparacionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReparacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha_entrada', 'date', array(
                'label' => 'Fecha de entrada',
                'attr'=>array("class"=>"datepicker"),
                'input' => 'datetime',
                'widget' => 'single_text',
                'format'=>'d-MM-y'))
            ->add('fecha_salida', 'date', array(
                'label' => 'Fecha de salida',
                'attr'=>array("class"=>"datepicker"),
                'input' => 'datetime',
                'widget' => 'single_text',
                'format'=>'d-MM-y'))
            ->add('nombre','text',array('label'=>'Nombre','required'=>false))
            ->add('tlf','text',array('label'=>'Teléfono','required'=>false))
            ->add('email','text',array('label'=>'E-mail','required'=>false))
            ->add('tipo_equipo','choice',array('label'=>'Equipo','choices'=>array('1'=>'Portatil','2'=>'Sobremesa'),'required'=>false))
            ->add('numero_serie','text',array('label'=>'N/S','required'=>false))
            ->add('accesorios','textarea',array('label'=>'Accesorios','required'=>false))
            ->add('averia','textarea',array('label'=>'Descripción de la avería','required'=>false))
            ->add('reparacion','textarea',array('label'=>'Reparación','required'=>false))
            ->add('precio','text',array('label'=>'Precio','required'=>false))
            ->add('presupuesto_aceptado','checkbox',array('label'=>'Presupuesto Aceptado','required'=>false))
            ->add('observaciones','textarea',array('label'=>'Precio','required'=>false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wixair\ReparacionesBundle\Entity\Reparacion'
        ));
    }

    public function getName()
    {
        return 'wixair_reparacionesbundle_reparaciontype';
    }
}
