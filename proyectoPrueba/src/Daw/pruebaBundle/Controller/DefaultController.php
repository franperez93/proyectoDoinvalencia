<?php

namespace Daw\pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DawpruebaBundle:Default:index.html.twig');
    }
    //Metodo que saca el hola mundo
    public function holaAction($nombre)
    {
        return $this->render('DawpruebaBundle:Default:hola.html.twig', array('nombre' => $nombre));
       //return new Response('<html><body>Hola '.$nombre.'</body></html>');
    }
    
    
}
