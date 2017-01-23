<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use DevLeaguesBundle\Entity\League;
use DevLeaguesBundle\Form\LeagueType;

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
    public function showAction(Request $request)
    {
		$repo = $this->getDoctrine()->getRepository(League::class);
		$league = $repo->find($request->get('leagueId'));

        return $this->render('DevLeaguesBundle:League:show.html.twig', array(
            'league' => $league,
        ));
    }

	/**
     * @Route("/league/", name="show_my_league")
	 *
	 * @Security("has_role('ROLE_USER')")
     */
    public function showMyLeagueAction(Request $request)
    {
		$league = $this->getUser()->getLeagues()[0];

        return $this->render('DevLeaguesBundle:League:show.html.twig', array(
            'league' => $league,
        ));
    }

    /**
     * @Route("/leagues", name="show_leagues")
     */
    public function showReducedAction()
    {
		$repo = $this->getDoctrine()->getRepository('DevLeaguesBundle\Entity\League');
		$leagues = $repo->findAll();

        return $this->render('DevLeaguesBundle:League:show_reduced.html.twig', array(
            'leagues' => $leagues,
        ));
    }

    /**
     * @Route("/new/league", name="new_league")
     */
    public function newAction(Request $request)
    {
		$league = new League();
		$form = $this->createForm(LeagueType::class, $league);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$league = $form->getData();

			$em = $this->getDoctrine()->getManager();
			$em->persist($league);
			$em->flush();

			return $this->redirectToRoute('show_league', array(
				'leagueId' => $league->getId(),
			));
		}
        return $this->render('DevLeaguesBundle:League:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/edit/league/{leagueId}", name="edit_league")
     */
    public function editAction()
    {
        return $this->render('DevLeaguesBundle:League:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/remove/league/{leagueId}", name="remove_league")
     */
    public function removeAction()
    {
        return $this->render('DevLeaguesBundle:League:remove.html.twig', array(
            // ...
        ));
    }

}
