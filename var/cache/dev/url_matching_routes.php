<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [[['_route' => '_logout_main'], null, null, null, false, false, null]],
        '/admin/categories/list' => [[['_route' => 'app_admin_categories_list', '_controller' => 'App\\Controller\\AdminController::getCategories'], null, null, null, false, false, null]],
        '/admin/categories/add' => [[['_route' => 'app_admin_categories_add', '_controller' => 'App\\Controller\\AdminController::addCategory'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\HomeController::products'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\HomeController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\HomeController::register'], null, null, null, false, false, null]],
        '/trade' => [[['_route' => 'app_trade', '_controller' => 'App\\Controller\\HomeController::tradeProduct'], null, ['POST' => 0], null, false, false, null]],
        '/profile/products' => [[['_route' => 'app_profile_products', '_controller' => 'App\\Controller\\ProfileController::getProducts'], null, null, null, false, false, null]],
        '/profile/trades' => [[['_route' => 'app_profile_trades', '_controller' => 'App\\Controller\\ProfileController::getTrades'], null, null, null, false, false, null]],
        '/profile/update' => [[['_route' => 'app_profile_update', '_controller' => 'App\\Controller\\ProfileController::updateProfile'], null, null, null, false, false, null]],
        '/profile/appointments' => [[['_route' => 'app_profile_appointments', '_controller' => 'App\\Controller\\ProfileController::getAppointments'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/categories/(?'
                    .'|update/([^/]++)(*:78)'
                    .'|delete/([^/]++)(*:100)'
                .')'
                .'|/pro(?'
                    .'|ducts/([^/]++)(*:130)'
                    .'|file/(?'
                        .'|trades/(?'
                            .'|([^/]++)(*:164)'
                            .'|validate/([^/]++)(*:189)'
                        .')'
                        .'|products/delete/([^/]++)(*:222)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'app_admin_categories_update', '_controller' => 'App\\Controller\\AdminController::updateCategory'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'app_admin_categories_delete', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], null, null, false, true, null]],
        130 => [[['_route' => 'app_product_single', '_controller' => 'App\\Controller\\HomeController::findOne'], ['id'], null, null, false, true, null]],
        164 => [[['_route' => 'app_profile_trades_delete', '_controller' => 'App\\Controller\\ProfileController::deleteTradeRequest'], ['id'], null, null, false, true, null]],
        189 => [[['_route' => 'app_profile_trades_validate', '_controller' => 'App\\Controller\\ProfileController::validateTradeRequest'], ['id'], null, null, false, true, null]],
        222 => [
            [['_route' => 'app_profile_products_delete', '_controller' => 'App\\Controller\\ProfileController::deleteProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
