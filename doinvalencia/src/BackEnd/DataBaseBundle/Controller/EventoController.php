<?php

namespace BackEnd\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEnd\DataBaseBundle\Entity\Evento;
use BackEnd\DataBaseBundle\Form\EventoType;

/**
 * Evento controller.
 *
 */
class EventoController extends Controller
{
    /**
     * Lists all Evento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eventos = $em->getRepository('BackEndDataBaseBundle:Evento')->findAll();
         
        return $this->render('evento/index.html.twig', array(
            'eventos' => $eventos
            
        ));
    }
    
    /**
     * Creates a new Evento entity.
     *
     */
    public function newAction(Request $request)
    {
        $evento = new Evento();
        $form = $this->createForm('BackEnd\DataBaseBundle\Form\EventoType', $evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evento);
            $em->flush();

            return $this->redirectToRoute('evento_show', array('id' => $evento->getId()));
        }

        return $this->render('evento/new.html.twig', array(
            'evento' => $evento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Evento entity.
     *
     */
    public function showAction(Evento $evento)
    {
        $deleteForm = $this->createDeleteForm($evento);

        return $this->render('evento/show.html.twig', array(
            'evento' => $evento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Evento entity.
     *
     */
    public function editAction(Request $request, Evento $evento)
    {
        $deleteForm = $this->createDeleteForm($evento);
        $editForm = $this->createForm('BackEnd\DataBaseBundle\Form\EventoType', $evento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evento);
            $em->flush();

            return $this->redirectToRoute('evento_edit', array('id' => $evento->getId()));
        }

        return $this->render('evento/edit.html.twig', array(
            'evento' => $evento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Evento entity.
     *
     */
    public function deleteAction(Request $request, Evento $evento)
    {
        $form = $this->createDeleteForm($evento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evento);
            $em->flush();
        }

        return $this->redirectToRoute('evento_index');
    }

    /**
     * Creates a form to delete a Evento entity.
     *
     * @param Evento $evento The Evento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Evento $evento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evento_delete', array('id' => $evento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
