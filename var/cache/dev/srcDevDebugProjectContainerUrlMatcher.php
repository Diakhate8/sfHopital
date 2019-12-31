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
        $allow = $allowSchemes = [];
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), ['HEAD', 'GET'], true)) {
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
        } elseif ('/' !== $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/') {
            $pathinfo = $trimmedPathinfo === $pathinfo ? $pathinfo.'/' : $trimmedPathinfo;
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $pathinfo, array &$allow = [], array &$allowSchemes = []): array
    {
        $allow = $allowSchemes = [];
        $pathinfo = rawurldecode($pathinfo) ?: '/';
        $trimmedPathinfo = rtrim($pathinfo, '/') ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo) {
            default:
                $routes = [
                    '/_profiler' => [['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true],
                    '/_profiler/search' => [['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false],
                    '/_profiler/search_bar' => [['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false],
                    '/_profiler/phpinfo' => [['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false],
                    '/_profiler/open' => [['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false],
                    '/admin' => [['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false],
                    '/admin/showservice' => [['_route' => 'admin.service.show', '_controller' => 'App\\Controller\\AdminController::showService'], null, null, null, false],
                    '/admin/serviceform' => [['_route' => 'admin.service.add', '_controller' => 'App\\Controller\\AdminController::addservice'], null, null, null, false],
                    '/admin/showspecialite' => [['_route' => 'admin.specialite.show', '_controller' => 'App\\Controller\\AdminController::showSpecialite'], null, null, null, false],
                    '/admin/specialiteform' => [['_route' => 'admin.specialite.add', '_controller' => 'App\\Controller\\AdminController::addspecialite'], null, null, null, false],
                    '/admin/showmedecin' => [['_route' => 'admin.medecin.show', '_controller' => 'App\\Controller\\AdminController::showMedecin'], null, null, null, false],
                    '/admin/medecinform' => [['_route' => 'admin.medecin.add', '_controller' => 'App\\Controller\\AdminController::addmedecin'], null, null, null, false],
                ];

                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];
                if ('/' !== $pathinfo && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                    if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                        return $allow = $allowSchemes = [];
                    }
                    break;
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

        $matchedPathinfo = $pathinfo;
        $regexList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/admin/(?'
                        .'|edite(?'
                            .'|s(?'
                                .'|ervice/([^/]++)(*:206)'
                                .'|pecialite/([^/]++)(*:232)'
                            .')'
                            .'|medecin/([^/]++)(*:257)'
                        .')'
                        .'|delete(?'
                            .'|specialite/([^/]++)(*:294)'
                            .'|medecin/([^/]++)(*:318)'
                        .')'
                    .')'
                .')/?$}sD',
        ];

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = [
                            38 => [['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true],
                            57 => [['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true],
                            102 => [['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false],
                            116 => [['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false],
                            136 => [['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false],
                            149 => [['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false],
                            159 => [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true],
                            206 => [['_route' => 'admin.service.edite', '_controller' => 'App\\Controller\\AdminController::editeservice'], ['id'], null, null, false, true],
                            232 => [['_route' => 'admin.specialite.edite', '_controller' => 'App\\Controller\\AdminController::editespecialite'], ['id'], null, null, false, true],
                            257 => [['_route' => 'admin.medecin.edite', '_controller' => 'App\\Controller\\AdminController::editemedecin'], ['id'], null, null, false, true],
                            294 => [['_route' => 'admin.specialite.delete', '_controller' => 'App\\Controller\\AdminController::deletespecialite'], ['id'], null, null, false, true],
                            318 => [['_route' => 'admin.medecin.delete', '_controller' => 'App\\Controller\\AdminController::deletemedecin'], ['id'], null, null, false, true],
                        ];

                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash, $hasTrailingVar) = $routes[$m];

                        $hasTrailingVar = $trimmedPathinfo !== $pathinfo && $hasTrailingVar;
                        if ('/' !== $pathinfo && !$hasTrailingVar && $hasTrailingSlash === ($trimmedPathinfo === $pathinfo)) {
                            if ('GET' === $canonicalMethod && (!$requiredMethods || isset($requiredMethods['GET']))) {
                                return $allow = $allowSchemes = [];
                            }
                            break;
                        }
                        if ($hasTrailingSlash && $hasTrailingVar && preg_match($regex, rtrim($matchedPathinfo, '/') ?: '/', $n) && $m === (int) $n['MARK']) {
                            $matches = $n;
                        }

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

                if (318 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return [];
    }
}
