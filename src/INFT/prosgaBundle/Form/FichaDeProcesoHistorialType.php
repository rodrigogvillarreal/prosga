<?php

namespace INFT\prosgaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichaDeProcesoHistorialType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fichaDeProceso', 'entity', array('class' => 'INFT\prosgaBundle\Entity\FichaDeProceso',
                                                    'label' => 'Proceso: ',
                                                    'attr' => array('class' => 'form-control')))
            ->add('fecha', 'date', array('label' => 'Fecha: '))
            ->add('nroRevision', 'integer', array('label' => 'Nº Revisión: ',
                                                    'attr' => array('class' => 'form-control')))
            ->add('descripcion', 'textarea', array('label' => 'Observaciones: ', 
                                                   'attr' => array('class' => 'form-control')
                                                  ))              
            ->add('persona', 'entity', array('class' => 'INFT\prosgaBundle\Entity\Persona',
                                                        'label' => 'Responsable: ', 
                                                        'attr' => array('class' => 'form-control')
                                                  ))
        ;
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'INFT\prosgaBundle\Entity\FichaDeProcesoHistorial'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'inft_prosgabundle_fichadeprocesohistorial';
    }
}