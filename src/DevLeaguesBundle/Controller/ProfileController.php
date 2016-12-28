<?php

namespace DevLeaguesBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseProfileController;
use DevLeaguesBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfileController extends BaseProfileController
{
	/**
	 * Show all Users
	 */
    public function indexAction()
    {
		$users = $this->getDoctrine()
		->getRepository('DevLeaguesBundle:User')
		->findAll();

		if (!$users) {
			throw $this->createNotFoundException('No users found');
		}
        return $this->render('DevLeaguesBundle:Profile:index.html.twig', array(
            'users' => $users,
        ));
    }

	/**
     * Show the user
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('FOSUserBundle:Profile:show.html.twig', array(
            'user' => $user,
        ));
    }

	/**
     * Show the profile of a user.
     */
    public function showProfileAction($userName)
    {
        $user = $this->getDoctrine()
		->getRepository('DevLeaguesBundle:User')
		->findByUsername($userName);

        return $this->render('DevLeaguesBundle:Profile:show.html.twig', array(
            'user' => $user[0],
        ));
    }

	/**
	 * Show user Events
	 */
	public function showEventsAction()
	{
		if ($user = $this->getUser()) {
			$events = $user->getEvents();

			if (!$events) {
				throw $this->createNotFoundException('No event found');
			}
		}
		else {
			return $this->redirectToRoute('fos_user_security_login');
		}

		return $this->render('DevLeaguesBundle:Event:index.html.twig', array(
			'events' => $events,
			)
		);
	}

	/**
	* Show user Leagues
	*/
	public function showLeaguesAction()
	{
		if ($user = $this->getUser()) {
			$leagues = $user->getLeagues();

			if (!$leagues) {
				throw $this->createNotFoundException('No leagues found');
			}
		}
		else {
			return $this->redirectToRoute('fos_user_security_login');
		}

		return $this->render('DevLeaguesBundle:League:index.html.twig', array(
			'leagues' => $leagues,
			)
		);
	}

	/**
	* Show user friends
	*/
	public function showFriendsAction()
	{
		if ($user = $this->getUser()) {
			$friends = $user->getFriends();

			if (!$friends) {
				throw $this->createNotFoundException('No friends found');
			}
		}
		else {
			return $this->redirectToRoute('fos_user_security_login');
		}

		return $this->render('DevLeaguesBundle:Profile:index.html.twig', array(
			'users' => $friends,
			)
		);
	}

	/**
	* Add user as friend
	* @Route("/add_friend", name="add_friend")
	*/
	public function addFriendAction(Request $request)
	{
		$response = new Response;
		$friend = $request->request->get('user');
		$user = $this->getUser();

		$user->addFriend($friend);
		$em = $this->getDoctrine()->getManager();
		$em->persist($user);
		$em->flush();

		$response->$this->forward('DevLeaguesBundle:Profile:showProfile', array(
			'user' => $friend,
			)
		);
		//return $response;
	}
}
