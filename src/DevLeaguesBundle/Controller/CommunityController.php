<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DevLeaguesBundle\Entity\User;

class CommunityController extends Controller
{
    /**
     * @Route("/community", name="community")
     */
    public function indexAction()
    {
		$repo = $this->getDoctrine()->getRepository(User::class);
		$users = $repo->findAll();
        return $this->render('DevLeaguesBundle:Community:index.html.twig', array(
            'users' => $users,
        ));
    }

}
