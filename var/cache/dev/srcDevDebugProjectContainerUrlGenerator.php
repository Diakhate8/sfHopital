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
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
        'admin.service.show' => [[], ['_controller' => 'App\\Controller\\AdminController::showService'], [], [['text', '/admin/showservice']], [], []],
        'admin.service.add' => [[], ['_controller' => 'App\\Controller\\AdminController::addservice'], [], [['text', '/admin/serviceform']], [], []],
        'admin.service.edite' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editeservice'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/editeservice']], [], []],
        'admin.specialite.show' => [[], ['_controller' => 'App\\Controller\\AdminController::showSpecialite'], [], [['text', '/admin/showspecialite']], [], []],
        'admin.specialite.add' => [[], ['_controller' => 'App\\Controller\\AdminController::addspecialite'], [], [['text', '/admin/specialiteform']], [], []],
        'admin.specialite.edite' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editespecialite'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/editespecialite']], [], []],
        'admin.specialite.delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deletespecialite'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/deletespecialite']], [], []],
        'admin.medecin.show' => [[], ['_controller' => 'App\\Controller\\AdminController::showMedecin'], [], [['text', '/admin/showmedecin']], [], []],
        'admin.medecin.add' => [[], ['_controller' => 'App\\Controller\\AdminController::addmedecin'], [], [['text', '/admin/medecinform']], [], []],
        'admin.medecin.edite' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editemedecin'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/editemedecin']], [], []],
        'admin.medecin.delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deletemedecin'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/deletemedecin']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
