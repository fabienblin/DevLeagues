<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use DevLeaguesBundle\Entity\Challenge;
use DevLeaguesBundle\Form\ChallengeType;

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
	public function showAction(Request $request)
	{
		$repo = $this->getDoctrine()->getRepository(Challenge::class);
		$challenge = $repo->find($request->get('challengeId'));

		return $this->render('DevLeaguesBundle:Challenge:show.html.twig', array(
			'challenge' => $challenge,
		));
	}

	/**
	* @Route("/challenges", name="show_challenges")
	*/
	public function showReducedAction()
	{
		$repo = $this->getDoctrine()->getRepository(Challenge::class);
		$challenges = $repo->findAll();
		$my_challenges = null;

		if ($user = $this->getUser())
		{
			$my_challenges = $user->getChallenges();
		}

		return $this->render('DevLeaguesBundle:Challenge:show_reduced.html.twig', array(
			'challenges' => $challenges,
			'my_challenges' => $my_challenges,
		));
	}

	/**
	* @Route("/new/challenge", name="new_challenge")
	* @Security("has_role('ROLE_USER')")
	*/
	public function newAction(Request $request)
	{
		$challenge = new Challenge();

		$form = $this->createForm(ChallengeType::class, $challenge);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$challenge = $form->getData();
			$user = $user = $this->getUser();

			$user->getChallenges()->add($challenge);
			$challenge->getUsers()->add($user);

			$em = $this->getDoctrine()->getManager();
			$em->persist($challenge);
			$em->flush();

			return $this->redirectToRoute('show_challenge', array(
				'challengeId' => $challenge->getId(),
			));
		}

		return $this->render('DevLeaguesBundle:Challenge:new.html.twig', array(
			'form' => $form->createView(),
		));
	}

	/**
	* @Route("/edit/challenge", name="edit_challenge")
	*/
	public function editAction()
	{
		return $this->render('DevLeaguesBundle:Challenge:edit.html.twig', array(
			// ...
		));
	}

	/**
	* @Route("/remove/challenge/{challengeId}", name="remove_challenge")
	*/
	public function removeAction()
	{
		return $this->render('DevLeaguesBundle:Challenge:remove.html.twig', array(
			// ...
		));
	}

}
