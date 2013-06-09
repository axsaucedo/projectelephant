<?php

namespace Server\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function initiateAction()
    {
        //return $this->render('ServerApiBundle:Default:index.html.twig', array('name' => rand()));


        return new JsonResponse($this->decode($this->encode(100000000)));
    }
    
    public function postMessageAction()
    {
        return new JsonResponse('ok');
    }

    private function encode($num) {
    	$alphabet = "abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789";

    	$base_count = strlen($alphabet);
    	$encoded = "";
    	while($num >= $base_count) {
    		$div = $num / $base_count;
    		$mod = ($num - ($base_count * intval($div)));
    		$encoded = $alphabet[$mod].$encoded;
    		$num = intval($div);
    	}

    	if($num) 
    		$encoded = $alphabet[$num].$encoded;

    	return $encoded;
    }

    private function decode($code) {
    	$alphabet = "abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789";

    	$decoded = 0;
    	$multi = 1;
    	while (strlen($code) > 0) {
    		$digit = $code[strlen($code) - 1];
    		$decoded += $multi * strpos($alphabet, $digit);
    		$multi = $multi * strlen($alphabet);
    		$code = substr($code, 0, -1);
    	}

    	return $decoded;
    }
}
