<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_fo_api_apigetallgames' => array(array(), array('_controller' => 'App\\Controller\\FO\\ApiController::apiGetAllGames', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/api/secure/games')), array(), array()),
        'app_fo_api_getgame' => array(array('id'), array('_controller' => 'App\\Controller\\FO\\ApiController::getGameAction', '_locale' => 'en'), array('id' => '\\d+', '_locale' => 'en|ru'), array(array('variable', '/', '\\d+', 'id'), array('text', '/api/secure/games')), array(), array()),
        'category_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\CategoryController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/category'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'customers_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\CustomersController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/customers'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'dashboard_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\DashboardController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'orders_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\OrdersController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/orders'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'pages_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\PagesController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/pages'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'products_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\ProductsController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/products'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'settings_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\SettingsController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/settings'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'users_index' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\UsersController::index', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/users/'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'user_delete' => array(array('_locale', 'id'), array('_controller' => 'App\\Controller\\BO\\UsersController::delete', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/delete'), array('variable', '/', '[^/]++', 'id'), array('text', '/users'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'user_add' => array(array('_locale'), array('_controller' => 'App\\Controller\\BO\\UsersController::new', '_locale' => 'en'), array('_locale' => 'en|ru'), array(array('text', '/users/add'), array('variable', '/', 'en|ru', '_locale')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'homepage' => array(array('_locale'), array('template' => 'dashboard/list.html.twig', '_locale' => 'en', '_controller' => 'App\\Controller\\BO\\DashboardController::index'), array('_locale' => 'en|ru'), array(array('variable', '/', 'en|ru', '_locale')), array(), array()),
        'api_login_check' => array(array(), array(), array(), array(array('text', '/api/login_check')), array(), array()),
        'profile' => array(array(), array(), array(), array(array('text', '/profile')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
