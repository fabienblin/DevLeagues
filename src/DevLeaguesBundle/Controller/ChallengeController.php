<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ChallengeController extends Controller
{
    /**
     * @Route("/challenge", name="challenge")
     */
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:Challenge:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/challenge/{challengeId}", name="show_challenge")
     */
    public function showAction()
    {
        return $this->render('DevLeaguesBundle:Challenge:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/challenges", name="show_challenges")
     */
    public function showReducedAction()
    {
        return $this->render('DevLeaguesBundle:Challenge:show_reduced.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/challenge/new", name="new_challenge")
     */
    public function newAction()
    {
        return $this->render('DevLeaguesBundle:Challenge:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/challenge/edit", name="edit_challenge")
     */
    public function editAction()
    {
        return $this->render('DevLeaguesBundle:Challenge:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/challenge/remove/{challengeId}", name="remove_challenge")
     */
    public function removeAction()
    {
        return $this->render('DevLeaguesBundle:Challenge:remove.html.twig', array(
            // ...
        ));
    }

}
