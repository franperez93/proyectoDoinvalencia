<?php

namespace BackEnd\DataBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
         $em = $this->getDoctrine()->getManager();

        $eventos = $em->getRepository('BackEndDataBaseBundle:Evento')->findAll();

        return $this->render('BackEndDataBaseBundle:Default:home.html.twig',array(
            'eventos' => $eventos));
    }
}
