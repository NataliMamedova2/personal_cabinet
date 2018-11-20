<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/api/secure/games' => array(array('_route' => 'app_fo_api_apigetallgames', '_controller' => 'App\\Controller\\FO\\ApiController::apiGetAllGames', '_locale' => 'en'), null, array('GET' => 0), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/api/login_check' => array(array('_route' => 'api_login_check'), null, null, null),
                    '/profile' => array(array('_route' => 'profile'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/api/secure/games/(\\d+)(*:30)'
                    .'|/(en|ru)/(?'
                        .'|c(?'
                            .'|ategory(*:60)'
                            .'|ustomers(*:75)'
                        .')'
                        .'|(*:83)'
                        .'|orders(*:96)'
                        .'|p(?'
                            .'|ages(*:111)'
                            .'|roducts(*:126)'
                        .')'
                        .'|settings(*:143)'
                        .'|users/(?'
                            .'|(*:160)'
                            .'|([^/]++)/delete(*:183)'
                            .'|add(*:194)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:235)'
                        .'|wdt/([^/]++)(*:255)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:301)'
                                .'|router(*:315)'
                                .'|exception(?'
                                    .'|(*:335)'
                                    .'|\\.css(*:348)'
                                .')'
                            .')'
                            .'|(*:358)'
                        .')'
                    .')'
                    .'|/(en|ru)?(*:377)'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            30 => array(array('_route' => 'app_fo_api_getgame', '_controller' => 'App\\Controller\\FO\\ApiController::getGameAction', '_locale' => 'en'), array('id'), array('GET' => 0), null),
                            60 => array(array('_route' => 'category_index', '_controller' => 'App\\Controller\\BO\\CategoryController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            75 => array(array('_route' => 'customers_index', '_controller' => 'App\\Controller\\BO\\CustomersController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            83 => array(array('_route' => 'dashboard_index', '_controller' => 'App\\Controller\\BO\\DashboardController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            96 => array(array('_route' => 'orders_index', '_controller' => 'App\\Controller\\BO\\OrdersController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            111 => array(array('_route' => 'pages_index', '_controller' => 'App\\Controller\\BO\\PagesController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            126 => array(array('_route' => 'products_index', '_controller' => 'App\\Controller\\BO\\ProductsController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            143 => array(array('_route' => 'settings_index', '_controller' => 'App\\Controller\\BO\\SettingsController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            160 => array(array('_route' => 'users_index', '_controller' => 'App\\Controller\\BO\\UsersController::index', '_locale' => 'en'), array('_locale'), array('GET' => 0), null),
                            183 => array(array('_route' => 'user_delete', '_controller' => 'App\\Controller\\BO\\UsersController::delete', '_locale' => 'en'), array('_locale', 'id'), array('GET' => 0), null),
                            194 => array(array('_route' => 'user_add', '_controller' => 'App\\Controller\\BO\\UsersController::new', '_locale' => 'en'), array('_locale'), array('POST' => 0, 'GET' => 1), null),
                            235 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            255 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            301 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            315 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            335 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            348 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            358 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            377 => array(array('_route' => 'homepage', 'template' => 'dashboard/list.html.twig', '_locale' => 'en', '_controller' => 'App\\Controller\\BO\\DashboardController::index'), array('_locale'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (377 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
