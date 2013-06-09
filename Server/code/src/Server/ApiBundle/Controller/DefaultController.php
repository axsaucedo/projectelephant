<?php

namespace Server\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function initiateAction()
    {
        //return $this->render('ServerApiBundle:Default:index.html.twig', array('name' => rand()));
        return new JsonResponse(rand());
    }
    
    public function getMessageAction()
    {
        return new JsonResponse('super');
    }
    
    public function postMessageAction()
    {
        return new JsonResponse('ok');
    }
}
