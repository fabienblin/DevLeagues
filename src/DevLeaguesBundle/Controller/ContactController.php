<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Contact:index.html.twig', array(
            // ...
        ));
    }

}
