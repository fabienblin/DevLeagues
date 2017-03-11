<?php
/**
* NavbarShowUserListener.php
* avanzu-admin
* Date: 23.02.14
*/

namespace DevLeaguesBundle\EventListener\Avanzu;


use Avanzu\AdminThemeBundle\Event\ShowUserEvent;
use DevLeaguesBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class NavbarShowUserListener {

	protected $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

	public function onShowUser(ShowUserEvent $event)
	{
		$event->setUser($this->getUser());
	}

	protected function getUser()
	{
		return $this->container->get('security.token_storage')->getToken()->getUser();
	}
}
