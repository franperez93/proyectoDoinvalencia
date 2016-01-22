<?php

namespace BackEnd\DataBaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni')
            ->add('nombre')
            ->add('apellidos')
            ->add('direccion')
            ->add('poblacion')
            ->add('provincia')
            ->add('codigoPostal')
            ->add('telefono')
            ->add('email')
            ->add('contrasena')
            ->add('nombreUsuario')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackEnd\DataBaseBundle\Entity\Usuario'
        ));
    }
}
