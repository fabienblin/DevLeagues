<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DevLeaguesBundle\Entity\League;
use DevLeaguesBundle\Form\NewLeagueType;

class LeagueController extends Controller
{
	public function indexAction()
	{
		$leagues = $this->getDoctrine()
		->getRepository('DevLeaguesBundle:League')
		->findAll();

		if (!$leagues) {
			$this->createNotFoundException('No leagues found.');
		}

		return $this->render('DevLeaguesBundle:League:index.html.twig', array(
			'leagues' => $leagues,
		));
	}

	public function newAction(Request $request)
	{
		$league = new League();
		$form = $this->createForm(NewLeagueType::class, $league);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$league = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($league);
			$em->flush();

			return $this->redirectToRoute('show_league',
				array('leagueName' => $league->getName()));
		}

		return $this->render('DevLeaguesBundle:League:new.html.twig', array(
			'form' => $form->createView(),
			)
		);
	}

	public function showAction($leagueName)
	{
		$league = $this->getDoctrine()
		->getRepository('DevLeaguesBundle:League')
		->findByName($leagueName);

		if (!$league) {
			throw $this->createNotFoundException('No event found');
		}

		return $this->render('DevLeaguesBundle:League:show.html.twig', array(
			'league' => $league[0],
			)
		);
	}
}
