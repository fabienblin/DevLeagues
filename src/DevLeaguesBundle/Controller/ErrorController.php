<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErrorController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Error:index.html.twig', array(
            // ...
        ));
    }

}
