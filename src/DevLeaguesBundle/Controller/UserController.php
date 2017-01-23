<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use DevLeaguesBundle\Entity\User;

/**
 * @Security("has_role('ROLE_USER')")
 */
class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function indexAction()
    {
        return $this->render('DevLeaguesBundle:User:index.html.twig', array(
            // ...
        ));
    }

    /**
	 * Show a users as visitor
	 *
     * @Route("user/{userId}", name="show_user")
     */
    public function showAction(Request $request)
    {
		$repo = $this->getDoctrine()->getRepository(User::class);
		$user = $repo->find($request->get('userId'));

        return $this->render('DevLeaguesBundle:User:show.html.twig', array(
            'user' => $user,
        ));
    }

    /**
     * @Route("/users", name="show_users")
     */
/*    public function showReducedAction()
    {
		$users = null;

        return $this->render('DevLeaguesBundle:User:show_reduced.html.twig', array(
            'users' => $users,
        ));
    }
*/
	/**
	 * Show the user's personal profile
	 *
     * @Route("/profile", name="show_profile")
     */
    public function showProfileAction()
    {
        return $this->render('DevLeaguesBundle:User:show_profile.html.twig', array(
            'user' => $this->getUser(),
        ));
    }

	/**
	 * Show the user's friendzone
	 *
     * @Route("/friendzone", name="show_friends")
     */
    public function showFriendzoneAction()
    {
        return $this->render('DevLeaguesBundle:User:show_reduced.html.twig', array(
			'users' => $this->my_friends(),
        ));
    }

    /**
     * @Route("/new/user", name="new_user")
     */
    public function newAction()
    {
        return $this->render('DevLeaguesBundle:User:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit/user/{userId}", name="edit_user")
     */
    public function editAction()
    {
        return $this->render('DevLeaguesBundle:User:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/remove/user/{userId}", name="remove_user")
     */
    public function removeAction()
    {
        return $this->render('DevLeaguesBundle:User:remove.html.twig', array(
            // ...
        ));
	}

	/**
     * @Route("/invite/friend/{userId}", name="invite_friend")
     */
    public function inviteFriendAction(Request $request)
    {
        $user = $this->getUser();
		$friend = $this->getDoctrine()->getRepository(User::class)
		->find($request->get('userId'));

		$user->getFriends()->add($friend);
		$friend->getFriends()->add($user);

		$em = $this->getDoctrine()->getManager();
		$em->persist($user);
		$em->persist($friend);
		$em->flush();

		return $this->render('DevLeaguesBundle:User:show.html.twig', array(
            'user' => $friend,
        ));
	}

	private function my_friends()
	{
		return ($user = $this->getUser()) ? $user->getFriends() : null;
	}
}
