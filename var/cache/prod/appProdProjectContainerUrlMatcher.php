<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'DevLeaguesBundle\\Controller\\AboutController::indexAction',  '_route' => 'about',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/challenge')) {
                // challenge
                if ($pathinfo === '/challenge') {
                    return array (  '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::indexAction',  '_route' => 'challenge',);
                }

                // show_challenge
                if (preg_match('#^/challenge/(?P<challengeId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_challenge')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::showAction',));
                }

                // show_challenges
                if ($pathinfo === '/challenges') {
                    return array (  '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::showReducedAction',  '_route' => 'show_challenges',);
                }

                // new_challenge
                if ($pathinfo === '/challenge/new') {
                    return array (  '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::newAction',  '_route' => 'new_challenge',);
                }

                // edit_challenge
                if ($pathinfo === '/challenge/edit') {
                    return array (  '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::editAction',  '_route' => 'edit_challenge',);
                }

                // remove_challenge
                if (0 === strpos($pathinfo, '/challenge/remove') && preg_match('#^/challenge/remove/(?P<challengeId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_challenge')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::removeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/co')) {
                // community
                if ($pathinfo === '/community') {
                    return array (  '_controller' => 'DevLeaguesBundle\\Controller\\CommunityController::indexAction',  '_route' => 'community',);
                }

                // contact
                if ($pathinfo === '/contact') {
                    return array (  '_controller' => 'DevLeaguesBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
                }

            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'DevLeaguesBundle\\Controller\\HomeController::indexAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/league')) {
            // league
            if ($pathinfo === '/league') {
                return array (  '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::indexAction',  '_route' => 'league',);
            }

            // show_league
            if (preg_match('#^/league/(?P<leagueId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_league')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::showAction',));
            }

            // show_leagues
            if ($pathinfo === '/leagues') {
                return array (  '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::showReducedAction',  '_route' => 'show_leagues',);
            }

            // new_league
            if ($pathinfo === '/league/new') {
                return array (  '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::newAction',  '_route' => 'new_league',);
            }

            // edit_league
            if (0 === strpos($pathinfo, '/league/edit') && preg_match('#^/league/edit/(?P<leagueId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_league')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::editAction',));
            }

            // remove_league
            if (0 === strpos($pathinfo, '/league/remove') && preg_match('#^/league/remove/(?P<leagueId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_league')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::removeAction',));
            }

        }

        // news
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'DevLeaguesBundle\\Controller\\NewsController::indexAction',  '_route' => 'news',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'DevLeaguesBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // show_user
            if (preg_match('#^/user/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_user')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showAction',));
            }

            // show_users
            if ($pathinfo === '/users') {
                return array (  '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showReducedAction',  '_route' => 'show_users',);
            }

            // new_user
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'DevLeaguesBundle\\Controller\\UserController::newAction',  '_route' => 'new_user',);
            }

            // edit_user
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_user')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\UserController::editAction',));
            }

            // remove_user
            if (0 === strpos($pathinfo, '/user/remove') && preg_match('#^/user/remove/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user')), array (  '_controller' => 'DevLeaguesBundle\\Controller\\UserController::removeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
