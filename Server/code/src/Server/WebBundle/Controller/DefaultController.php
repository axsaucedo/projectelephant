<?php

namespace Server\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ServerWebBundle:Default:index.html.twig');
    }

    public function channelAction()
    {
        return $this->render('ServerWebBundle:Default:channel.html.twig');
    }
}
