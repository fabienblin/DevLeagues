<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:News:index.html.twig', array(
            // ...
        ));
    }

}
