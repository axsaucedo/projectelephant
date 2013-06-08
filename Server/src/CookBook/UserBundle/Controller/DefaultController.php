<?php

namespace CookBook\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CookBookUserBundle:Default:index.html.twig', array('name' => 'Prathap'));
    }
}
