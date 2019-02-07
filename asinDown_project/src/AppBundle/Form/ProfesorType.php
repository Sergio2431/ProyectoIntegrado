<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class ProfesorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('username', TextType::class)
        ->add('plainPassword', RepeatedType::class, array(
            'type' => PasswordType::class,
            'first_options'  => array('label' => 'Contraseña'),
            'second_options' => array('label' => 'Repite contraseña'),
        ))  
        ->add('nombre', TextType::class)
        ->add('apellidos', TextType::class)
        ->add('telefono', NumberType::class)
        ->add('direccion', TextType::class)
        ->add('correo', EmailType::class)
        
        ->add('Registrar', SubmitType::class)
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profesor'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_profesor';
    }


}
