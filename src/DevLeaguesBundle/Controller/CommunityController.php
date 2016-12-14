<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommunityController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Community:index.html.twig', array(
            // ...
        ));
    }

}
