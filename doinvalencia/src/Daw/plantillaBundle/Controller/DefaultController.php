<?php

namespace Daw\plantillaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DawplantillaBundle:Default:index.html.twig');
    }
    
     public function mieventoAction()
    {
        return $this->render('DawplantillaBundle:Default:mievento.html.twig');
    }
    
    
}
