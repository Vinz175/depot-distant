<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/disc' => [[['_route' => 'app_disc_index', '_controller' => 'App\\Controller\\DiscController::index'], null, ['GET' => 0], null, true, false, null]],
        '/disc/new' => [[['_route' => 'app_disc_new', '_controller' => 'App\\Controller\\DiscController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/first' => [[['_route' => 'app_first', '_controller' => 'App\\Controller\\FirstController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/profil/detail' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::detail'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/disc/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                    .'|(*:43)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:82)'
                    .'|wdt/([^/]++)(*:101)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:147)'
                            .'|router(*:161)'
                            .'|exception(?'
                                .'|(*:181)'
                                .'|\\.css(*:194)'
                            .')'
                        .')'
                        .'|(*:204)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_disc_show', '_controller' => 'App\\Controller\\DiscController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'app_disc_edit', '_controller' => 'App\\Controller\\DiscController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [[['_route' => 'app_disc_delete', '_controller' => 'App\\Controller\\DiscController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        101 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        147 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        161 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        194 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        204 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
