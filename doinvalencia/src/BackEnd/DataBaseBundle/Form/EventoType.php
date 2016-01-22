<?php

namespace BackEnd\DataBaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('localizacion')
            ->add('ciudad')
            ->add('fecha', 'datetime')
            ->add('reservas')
            ->add('reservasRestantes')
            ->add('informacion')
            ->add('precioReserva')
            ->add('tags')
            ->add('tipoEventoId')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackEnd\DataBaseBundle\Entity\Evento'
        ));
    }
}
