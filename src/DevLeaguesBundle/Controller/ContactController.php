<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Contact:index.html.twig', array(
            // ...
        ));
    }

}
