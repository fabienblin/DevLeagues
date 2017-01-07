<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LeagueController extends Controller
{
    /**
     * @Route("/league", name="league")
     */
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:League:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/league/{leagueId}", name="show_league")
     */
    public function showAction()
    {
        return $this->render('DevLeaguesBundle:League:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/leagues", name="show_leagues")
     */
    public function showReducedAction()
    {
        return $this->render('DevLeaguesBundle:League:show_reduced.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/league/new", name="new_league")
     */
    public function newAction()
    {
        return $this->render('DevLeaguesBundle:League:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/league/edit/{leagueId}", name="edit_league")
     */
    public function editAction()
    {
        return $this->render('DevLeaguesBundle:League:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/league/remove/{leagueId}", name="remove_league")
     */
    public function removeAction()
    {
        return $this->render('DevLeaguesBundle:League:remove.html.twig', array(
            // ...
        ));
    }

}
