<?php

namespace INFT\prosgaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AlarmaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('activarCada')
            ->add('modoAviso')
            ->add('observacion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nombre')
            ->add('activarCada')
            ->add('frecuencia.nombre', 'string', array('label' => 'Frecuencia'))
            ->add('modoAviso')
            ->add('observacion')
            ->add('_action', 'actions', array('label' => 'Acciones',
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre')
            ->add('activarCada')
            ->add('frecuencia', 'entity', array(
                'class' => 'prosgaBundle:Frecuencia',
                'property' => 'nombre',
            ))         
            ->add('modoAviso')
            ->add('observacion', 'textarea', array('required' => false))               
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombre')
            ->add('activarCada')
            ->add('frecuencia.nombre', 'string', array('label' => 'Frecuencia'))
            ->add('modoAviso')
            ->add('observacion')            
        ;
    }
}
