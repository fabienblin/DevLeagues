<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @Route("/news", name="news")
     */
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:News:index.html.twig', array(
            // ...
        ));
    }

}
