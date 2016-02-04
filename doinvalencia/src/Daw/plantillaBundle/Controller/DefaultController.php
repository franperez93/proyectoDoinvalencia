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
    
}
