<?php

namespace Daw\plantillaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eventos = $em->getRepository('BackEndDataBaseBundle:Evento')->findAll();

        return $this->render('DawplantillaBundle:Default:index.html.twig',array(
            'eventos' => $eventos));
    }
    
    public function mieventoAction()
    {
        return $this->render('DawplantillaBundle:Default:mievento.html.twig');
    }
    
     /**
     * Lists de eventos por categoria
     *
     */
    public function categoriaAction()
    {
        $em = $this->getDoctrine()->getManager();
        
         $eventos = $em->getRepository('BackEndDataBaseBundle:Evento')->findAll();
         $eventosDep = $em->getRepository('BackEndDataBaseBundle:Evento')->findBy(
             array(
                'tipoEventoId'=> '2' )
             );

        return $this->render('DawplantillaBundle:Default:categorias.html.twig', array(
            'eventos' => $eventos,
            'eventosDep' => $eventosDep
        ));
    }
    
}
