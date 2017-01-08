<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     * @Route("user/{userId}", name="show_user")
     */
    public function showAction()
    {
        return $this->render('DevLeaguesBundle:User:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/users", name="show_users")
     */
    public function showReducedAction()
    {
        return $this->render('DevLeaguesBundle:User:show_reduced.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/user/new", name="new_user")
     */
    public function newAction()
    {
        return $this->render('DevLeaguesBundle:User:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/user/edit/{userId}", name="edit_user")
     */
    public function editAction()
    {
        return $this->render('DevLeaguesBundle:User:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/user/remove/{userId}", name="remove_user")
     */
    public function removeAction()
    {
        return $this->render('DevLeaguesBundle:User:remove.html.twig', array(
            // ...
        ));
    }
}
