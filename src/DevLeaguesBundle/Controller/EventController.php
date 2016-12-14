<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Event:index.html.twig', array(
            // ...
        ));
    }

}
