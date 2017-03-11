<?php
/**
* SidebarSetupMenuDemoListener.php
* avanzu-admin
* Date: 23.02.14
*/

namespace DevLeaguesBundle\EventListener\Avanzu;


use Avanzu\AdminThemeBundle\Event\SidebarMenuEvent;
use DevLeaguesBundle\Entity\Avanzu\MenuItem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use DevLeaguesBundle\Entity\User;

class SidebarSetupMenuListener
{
	protected $container;
	protected $user;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
		$this->user = $this->container->get('security.token_storage')->getToken()->getUser();
	}

	public function onSetupMenu(SidebarMenuEvent $event)
	{
		$request = $event->getRequest();


		foreach ($this->getMainMenu($request) as $item) {
			$event->addItem($item);
		}


		foreach ($this->getProfileMenu($request) as $item) {
			$event->addItem($item);
		}
	}

	private function getProfileMenu(Request $request)
	{
		$profileItems = array();
		$args = array();

		if ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

			if ($this->user->hasRole(User::ROLE_DEVELOPER))
			{
				$profileItems = array(
					new MenuItem('profile_header', 'Related To Me', null),
					$profile = new MenuItem('profile_profile', 'Profile', 'show_profile', $args, 'fa fa-user'),
					$friendzone = new MenuItem('profile_friendzone', 'Friendzone', 'show_friends', $args, 'fa fa-users'),
					$challenges = new MenuItem('profile_challenges', 'Challenges', 'show_challenges', $args, 'fa fa-trophy'),
					$league = new MenuItem('profile_league', 'League', 'show_my_league', $args, 'fa fa-institution'),
				);

				$challenges->addChild(new MenuItem('participating', 'Participating', 'show_challenges'))
				->addChild(new MenuItem('old', 'Old', 'show_challenges'));
			}
			else if ($this->user->hasRole(User::ROLE_COMPANY))
			{
				$profileItems = array(
					new MenuItem('profile_header', 'Related To Me', null),
					$profile = new MenuItem('profile_profile', 'Profile', 'show_profile', $args, 'fa fa-user'),
				);
			}
			else if ($this->user->hasRole(User::ROLE_USER))
			{
				$profileItems = array(
					new MenuItem('profile_header', 'Related To Me', null),
					$profile = new MenuItem('profile_profile', 'Profile', 'fos_user_profile_show', $args, 'fa fa-user'),
				);
			}
		}

		return $this->activateByRoute($request->get('_route'), $profileItems);
	}

	protected function getMainMenu(Request $request)
	{
		$args = array();

		$mainItems = array(
			new MenuItem('main_header', 'Main Menu', null),
			$home = new MenuItem('main_home', 'Home', 'home', $args, 'fa fa-home'),
			$about = new MenuItem('main_about', 'About', 'about', $args, 'fa fa-home'),
			$contact = new MenuItem('main_contact', 'Contact', 'contact', $args, 'fa fa-home'),
			$news = new MenuItem('main_news', 'News', 'news_index', $args, 'fa fa-home'),
			$community = new MenuItem('main_community', 'Community', 'user_index', $args, 'fa fa-home'),
			$challenges = new MenuItem('main_challenges', 'Challenges', 'challenge_index', $args, 'fa fa-home'),
			$technologies = new MenuItem('main_technologies', 'Technologies', 'technology_index', $args, 'fa fa-home'),
			$leagues = new MenuItem('main_leagues', 'Leagues', 'league_index', $args, 'fa fa-home'),
			$rewards = new MenuItem('main_rewards', 'Rewards', 'reward_index', $args, 'fa fa-home'),
			$login = new MenuItem('main_login', 'Login', 'fos_user_security_login', $args, 'fa fa-home'),
			$register = new MenuItem('main_register', 'Register', 'fos_user_registration_register', $args, 'fa fa-home'),
			$profile = new MenuItem('main_profile', 'Profile', 'fos_user_profile_show', $args, 'fa fa-home'),
		);

		return $this->activateByRoute($request->get('_route'), $mainItems);
	}

	protected function activateByRoute($route, $items) {

		foreach($items as $item) { /** @var $item MenuItem */
			if($item->hasChildren()) {
				$this->activateByRoute($route, $item->getChildren());
			}
			else {
				if($item->getRoute() == $route) {
					$item->setIsActive(true);
				}
			}
		}

		return $items;
	}


}
