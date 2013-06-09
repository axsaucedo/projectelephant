<?php

namespace Server\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Server\ApiBundle\Entity\Channel;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function initiateAction()
    {
        //return $this->render('ServerApiBundle:Default:index.html.twig', array('name' => rand()));
        return new JsonResponse(rand());
    }
    
    public function postMessageAction(Request $request)
    {
        $name = $request->request->get('name', 'anon');
        $message = $request->request->get('message', '');
        $channel = $request->request->get('channel', 'anon');
        
        $objChannel = new Channel();
        $objChannel->setName($name);
        $objChannel->setMessage($message);
        $objChannel->setChannel($channel);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($objChannel);
        $em->flush();
        
        $repository = $this->getDoctrine()->getRepository("ServerApiBundle:Channel");
        $messages = $repository->findByChannel($channel);
        
        return new JsonResponse($messages);
    }
}
