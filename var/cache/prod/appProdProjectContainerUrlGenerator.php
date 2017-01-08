<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\AboutController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'challenge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/challenge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_challenge' => array (  0 =>   array (    0 => 'challengeId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'challengeId',    ),    1 =>     array (      0 => 'text',      1 => '/challenge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_challenges' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::showReducedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/challenges',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_challenge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/challenge/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_challenge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/challenge/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_challenge' => array (  0 =>   array (    0 => 'challengeId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'challengeId',    ),    1 =>     array (      0 => 'text',      1 => '/challenge/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'community' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\CommunityController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/community',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'league' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/league',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_league' => array (  0 =>   array (    0 => 'leagueId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leagueId',    ),    1 =>     array (      0 => 'text',      1 => '/league',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_leagues' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::showReducedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/leagues',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_league' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/league/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_league' => array (  0 =>   array (    0 => 'leagueId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leagueId',    ),    1 =>     array (      0 => 'text',      1 => '/league/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_league' => array (  0 =>   array (    0 => 'leagueId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leagueId',    ),    1 =>     array (      0 => 'text',      1 => '/league/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\NewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showReducedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_autocomplete_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-autocomplete-items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
