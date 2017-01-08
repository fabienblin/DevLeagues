<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CommunityController extends Controller
{
    /**
     * @Route("/community", name="community")
     */
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Community:index.html.twig', array(
            // ...
        ));
    }

}
