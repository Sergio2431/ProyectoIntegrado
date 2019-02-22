<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProgramaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre')
        ->add('usuarios')
        ->add('idProfesor')
        ->add('duracion')
        ->add('direccion')
        ->add('horario')
        ->add('idAlumno')
          ->add('save', SubmitType::class, array('label' => 'Actualizar'));
    }
}
