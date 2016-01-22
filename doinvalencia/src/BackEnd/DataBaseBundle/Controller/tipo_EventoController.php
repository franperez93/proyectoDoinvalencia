<?php

namespace BackEnd\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEnd\DataBaseBundle\Entity\tipo_Evento;
use BackEnd\DataBaseBundle\Form\tipo_EventoType;

/**
 * tipo_Evento controller.
 *
 */
class tipo_EventoController extends Controller
{
    /**
     * Lists all tipo_Evento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipo_Eventos = $em->getRepository('BackEndDataBaseBundle:tipo_Evento')->findAll();

        return $this->render('tipo_evento/index.html.twig', array(
            'tipo_Eventos' => $tipo_Eventos,
        ));
    }

    /**
     * Creates a new tipo_Evento entity.
     *
     */
    public function newAction(Request $request)
    {
        $tipo_Evento = new tipo_Evento();
        $form = $this->createForm('BackEnd\DataBaseBundle\Form\tipo_EventoType', $tipo_Evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipo_Evento);
            $em->flush();

            return $this->redirectToRoute('tipo_evento_show', array('id' => $tipo_evento->getId()));
        }

        return $this->render('tipo_evento/new.html.twig', array(
            'tipo_Evento' => $tipo_Evento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipo_Evento entity.
     *
     */
    public function showAction(tipo_Evento $tipo_Evento)
    {
        $deleteForm = $this->createDeleteForm($tipo_Evento);

        return $this->render('tipo_evento/show.html.twig', array(
            'tipo_Evento' => $tipo_Evento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipo_Evento entity.
     *
     */
    public function editAction(Request $request, tipo_Evento $tipo_Evento)
    {
        $deleteForm = $this->createDeleteForm($tipo_Evento);
        $editForm = $this->createForm('BackEnd\DataBaseBundle\Form\tipo_EventoType', $tipo_Evento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipo_Evento);
            $em->flush();

            return $this->redirectToRoute('tipo_evento_edit', array('id' => $tipo_Evento->getId()));
        }

        return $this->render('tipo_evento/edit.html.twig', array(
            'tipo_Evento' => $tipo_Evento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipo_Evento entity.
     *
     */
    public function deleteAction(Request $request, tipo_Evento $tipo_Evento)
    {
        $form = $this->createDeleteForm($tipo_Evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipo_Evento);
            $em->flush();
        }

        return $this->redirectToRoute('tipo_evento_index');
    }

    /**
     * Creates a form to delete a tipo_Evento entity.
     *
     * @param tipo_Evento $tipo_Evento The tipo_Evento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(tipo_Evento $tipo_Evento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipo_evento_delete', array('id' => $tipo_Evento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
