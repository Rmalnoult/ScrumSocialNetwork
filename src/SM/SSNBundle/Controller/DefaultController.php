<?php

namespace SM\SSNBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // return $this->render('SMSSNBundle:Default:index.html.twig', array('name' => $name));
        return $this->render('SMSSNBundle:Default:index.html.twig');
    }
}
