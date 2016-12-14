<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:About:index.html.twig', array(
            // ...
        ));
    }

}
