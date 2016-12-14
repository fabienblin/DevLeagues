<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LeaguesController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Leagues:index.html.twig', array(
            // ...
        ));
    }

}
