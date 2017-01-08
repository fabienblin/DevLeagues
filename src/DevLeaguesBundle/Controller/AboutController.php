<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:About:index.html.twig', array(
            // ...
        ));
    }

}
