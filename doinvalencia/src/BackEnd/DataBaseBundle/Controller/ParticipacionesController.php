<?php

namespace BackEnd\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackEnd\DataBaseBundle\Entity\Participaciones;
use BackEnd\DataBaseBundle\Form\ParticipacionesType;

/**
 * Participaciones controller.
 *
 */
class ParticipacionesController extends Controller
{
    /**
     * Lists all Participaciones entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $participaciones = $em->getRepository('BackEndDataBaseBundle:Participaciones')->findAll();

        return $this->render('participaciones/index.html.twig', array(
            'participaciones' => $participaciones,
        ));
    }

    /**
     * Creates a new Participaciones entity.
     *
     */
    public function newAction(Request $request)
    {
        $participacione = new Participaciones();
        $form = $this->createForm('BackEnd\DataBaseBundle\Form\ParticipacionesType', $participacione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participacione);
            $em->flush();

            return $this->redirectToRoute('participaciones_show', array('id' => $participaciones->getId()));
        }

        return $this->render('participaciones/new.html.twig', array(
            'participacione' => $participacione,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Participaciones entity.
     *
     */
    public function showAction(Participaciones $participacione)
    {
        $deleteForm = $this->createDeleteForm($participacione);

        return $this->render('participaciones/show.html.twig', array(
            'participacione' => $participacione,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Participaciones entity.
     *
     */
    public function editAction(Request $request, Participaciones $participacione)
    {
        $deleteForm = $this->createDeleteForm($participacione);
        $editForm = $this->createForm('BackEnd\DataBaseBundle\Form\ParticipacionesType', $participacione);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participacione);
            $em->flush();

            return $this->redirectToRoute('participaciones_edit', array('id' => $participacione->getId()));
        }

        return $this->render('participaciones/edit.html.twig', array(
            'participacione' => $participacione,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Participaciones entity.
     *
     */
    public function deleteAction(Request $request, Participaciones $participacione)
    {
        $form = $this->createDeleteForm($participacione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($participacione);
            $em->flush();
        }

        return $this->redirectToRoute('participaciones_index');
    }

    /**
     * Creates a form to delete a Participaciones entity.
     *
     * @param Participaciones $participacione The Participaciones entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Participaciones $participacione)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('participaciones_delete', array('id' => $participacione->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
