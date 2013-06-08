<?php

namespace JMS\DiExtraBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("controller.extended_hello", parent = "controller.hello")
 */
class ExtendedServiceController extends ServiceController
{
<<<<<<< HEAD
    public function helloAction()
    {
        return new Response('hello');
    }
=======
    public function helloAction()
    {
        return new Response('hello');
    }
>>>>>>> 1aea908cb90f13274c7cf69d28a4d03849565ad9
}
