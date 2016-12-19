<?php

namespace DevLeaguesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use DevLeaguesBundle\Entity\Event;
use DevLeaguesBundle\Entity\User;
use DevLeaguesBundle\Entity\Reward;
use DevLeaguesBundle\Form\NewEventType;

class EventController extends Controller
{
	/**
	 * Returns all Events
	 */
    public function indexAction()
    {
		$events = $this->getDoctrine()
		->getRepository('DevLeaguesBundle:Event')
		->findAll();

		if (!$events) {
			throw $this->createNotFoundException('No events found');
		}
        return $this->render('DevLeaguesBundle:Event:index.html.twig', array(
            'events' => $events,
        ));
    }

	/**
	 * Create new Event
	 */
	public function newAction(Request $request)
	{
		$event = new Event();
		$em = $this->getDoctrine()->getManager();
		$form = $this->createForm(NewEventType::class, $event);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$event = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($event);
			$em->flush();

			return $this->redirectToRoute('show_event',
				array('eventName' => $event->getId()));
		}
		return $this->render('DevLeaguesBundle:Event:new.html.twig', array(
			'form' => $form->createView(),
			)
		);
	}

	public function showAction($eventId)
	{
		$event = $this->getDoctrine()
		->getRepository('DevLeaguesBundle:Event')
		->find($eventId);

		if (!$event) {
			throw $this->createNotFoundException('No event found');
		}

		return $this->render('DevLeaguesBundle:Event:show.html.twig', array(
			'event' => $event,
			)
		);
	}
}
