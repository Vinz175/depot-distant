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
        '/' => [[['_route' => 'app_first', '_controller' => 'App\\Controller\\FirstController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/profil/detail' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::detail'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/disc/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                    .'|(*:43)'
                .')'
                .'|/profil/([^/]++)/edit(*:72)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:110)'
                    .'|wdt/([^/]++)(*:130)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:176)'
                            .'|router(*:190)'
                            .'|exception(?'
                                .'|(*:210)'
                                .'|\\.css(*:223)'
                            .')'
                        .')'
                        .'|(*:233)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_disc_show', '_controller' => 'App\\Controller\\DiscController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'app_disc_edit', '_controller' => 'App\\Controller\\DiscController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [[['_route' => 'app_disc_delete', '_controller' => 'App\\Controller\\DiscController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        72 => [[['_route' => 'app_profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        110 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        130 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        176 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        190 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        210 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        223 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        233 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
