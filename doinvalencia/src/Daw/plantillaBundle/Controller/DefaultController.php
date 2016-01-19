<?php

namespace Daw\plantillaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DawplantillaBundle:Default:index.html.twig');
    }
    
     public function eventoAction()
    {
        return $this->render('DawplantillaBundle:Default:evento.html.twig');
    }
    
    
}
