<?php

namespace INFT\prosgaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use INFT\prosgaBundle\Entity\Actividad;
use INFT\prosgaBundle\Form\ActividadType;

/**
 * Actividad controller.
 *
 * @Route("/actividad")
 */
class ActividadController extends Controller
{

    /**
     * Lists all Actividad entities.
     *
     * @Route("/", name="actividad")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($auditoria_id = 0)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('prosgaBundle:Actividad')->findAll();
        
        //$auditorias = $em->getRepository('prosgaBundle:Auditoria')->findAll();        
        
        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Actividad entity.
     *
     * @Route("/", name="actividad_create")
     * @Method("POST")
     * @Template("prosgaBundle:Actividad:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Actividad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('actividad_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Actividad entity.
     *
     * @param Actividad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Actividad $entity)
    {
        $form = $this->createForm(new ActividadType(), $entity, array(
            'action' => $this->generateUrl('actividad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear Actividad',
                                             'attr' => array('class' => 'btn btn-primary espacio10')));

        return $form;
    }

    /**
     * Displays a form to create a new Actividad entity.
     *
     * @Route("/new", name="actividad_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Actividad();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Actividad entity.
     *
     * @Route("/{id}", name="actividad_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Actividad entity.
     *
     * @Route("/{id}/edit", name="actividad_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Actividad entity.
    *
    * @param Actividad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Actividad $entity)
    {
        $form = $this->createForm(new ActividadType(), $entity, array(
            'action' => $this->generateUrl('actividad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar Datos',
                                             'attr' => array('class' => 'btn btn-primary espacio10')));

        return $form;
    }
    /**
     * Edits an existing Actividad entity.
     *
     * @Route("/{id}", name="actividad_update")
     * @Method("PUT")
     * @Template("prosgaBundle:Actividad:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('prosgaBundle:Actividad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actividad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('actividad_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Actividad entity.
     *
     * @Route("/{id}", name="actividad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('prosgaBundle:Actividad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Actividad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('actividad'));
    }

    /**
     * Creates a form to delete a Actividad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('actividad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar Actividad',
                                            'attr' => array('class' => 'btn btn-danger espacio10')))
            ->getForm()
        ;
    }

    public function findActivitiesByAuditoriaIdAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$actividades = $em->getRepository('prosgaBundle:Actividad')->findByAuditoriaId($id);

    	return array(
            'actividades' => $actividades,
        );
    }

    public function findActivitiesByPersonaIdAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$actividades = $em->getRepository('prosgaBundle:Actividad')->findByPersonaId($id);

    	return array(
    		'actividades' => $actividades,
    		);
    }

    public function findActivitiesByProcesoIdAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$actividades = $em->getRepository('prosgaBundle:Actividad')->findByProcesoId($id);

    	return array(
    		'actividades' => $actividades
    		);
    }

    public function findActivitiesByControlIdAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$actividades = $em->getRepository('prosgaBundle:Actividad')->findByControlId($id);

    	return array(
    		'actividades' => $actividades,
    		);
    }
}
