<?php

namespace BackEnd\DataBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackEndDataBaseBundle:Default:index.html.twig');
    }
}
