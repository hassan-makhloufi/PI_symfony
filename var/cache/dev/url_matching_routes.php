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
        '/admin/forums' => [[['_route' => 'app_admin_forums', '_controller' => 'App\\Controller\\AdminController::findAllForums'], null, null, null, false, false, null]],
        '/admin/products' => [[['_route' => 'app_admin_products', '_controller' => 'App\\Controller\\AdminController::findAllProducts'], null, null, null, false, false, null]],
        '/admin/reclamations' => [[['_route' => 'app_admin_reclamation', '_controller' => 'App\\Controller\\AdminController::findAllReclamations'], null, null, null, false, false, null]],
        '/admin/livraison' => [[['_route' => 'app_admin_livraison', '_controller' => 'App\\Controller\\AdminController::findAllShipping'], null, null, null, false, false, null]],
        '/admin/forum/categories' => [[['_route' => 'app_forum_category', '_controller' => 'App\\Controller\\ForumController::getForumCategories'], null, null, null, false, false, null]],
        '/admin/forum/categories/add' => [[['_route' => 'app_forum_category_create', '_controller' => 'App\\Controller\\ForumController::createForumCategory'], null, null, null, false, false, null]],
        '/forum/create' => [[['_route' => 'app_forum_create', '_controller' => 'App\\Controller\\ForumController::createForum'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'app_forum', '_controller' => 'App\\Controller\\ForumController::getAllForums'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\HomeController::products'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\HomeController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\HomeController::register'], null, null, null, false, false, null]],
        '/profile/liv-lines' => [[['_route' => 'app_livraison_lines', '_controller' => 'App\\Controller\\LivraisonController::findAllShippingLines'], null, null, null, false, false, null]],
        '/profile/livraison/create' => [[['_route' => 'app_livraison_create', '_controller' => 'App\\Controller\\LivraisonController::createLivraison'], null, null, null, false, false, null]],
        '/profile/livraison' => [[['_route' => 'app_livraison', '_controller' => 'App\\Controller\\LivraisonController::findAllShippings'], null, null, null, false, false, null]],
        '/notification' => [[['_route' => 'app_notification', '_controller' => 'App\\Controller\\NotificationController::findAll'], null, null, null, false, false, null]],
        '/profile/products' => [[['_route' => 'app_profile_products', '_controller' => 'App\\Controller\\ProfileController::getProducts'], null, null, null, false, false, null]],
        '/profile/update' => [[['_route' => 'app_profile_update', '_controller' => 'App\\Controller\\ProfileController::updateProfile'], null, null, null, false, false, null]],
        '/profile/appointments' => [[['_route' => 'app_profile_appointments', '_controller' => 'App\\Controller\\ProfileController::getAppointments'], null, null, null, false, false, null]],
        '/reclamation/create' => [[['_route' => 'app_reclamation_create', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/profile/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::findAllReclamations'], null, null, null, false, false, null]],
        '/trade' => [[['_route' => 'app_trade', '_controller' => 'App\\Controller\\TradeController::tradeProduct'], null, ['POST' => 0], null, false, false, null]],
        '/tradelines' => [[['_route' => 'app_trade_lines', '_controller' => 'App\\Controller\\TradeController::getTradeLines'], null, ['GET' => 0], null, false, false, null]],
        '/tradelines/validate' => [[['_route' => 'app_trade_lines_validate', '_controller' => 'App\\Controller\\TradeController::validateLineTrades'], null, null, null, false, false, null]],
        '/profile/trades' => [[['_route' => 'app_profile_trades', '_controller' => 'App\\Controller\\TradeController::getTrades'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|categories/(?'
                        .'|update/([^/]++)(*:81)'
                        .'|delete/([^/]++)(*:103)'
                    .')'
                    .'|forum(?'
                        .'|s/delete/([^/]++)(*:137)'
                        .'|/categories/(?'
                            .'|update/([^/]++)(*:175)'
                            .'|delete/([^/]++)(*:198)'
                        .')'
                    .')'
                    .'|products/(?'
                        .'|delete/([^/]++)(*:235)'
                        .'|update/([^/]++)(*:258)'
                    .')'
                    .'|response/(?'
                        .'|([^/]++)(*:287)'
                        .'|update/([^/]++)(*:310)'
                    .')'
                    .'|livraison/([^/]++)/([^/]++)(*:346)'
                .')'
                .'|/forum/(?'
                    .'|update/([^/]++)(*:380)'
                    .'|delete/([^/]++)(*:403)'
                    .'|([^/]++)(*:419)'
                    .'|like/([^/]++)(*:440)'
                .')'
                .'|/comment/(?'
                    .'|delete/([^/]++)/([^/]++)(*:485)'
                    .'|update/([^/]++)/([^/]++)(*:517)'
                .')'
                .'|/pro(?'
                    .'|ducts/([^/]++)(*:547)'
                    .'|file/(?'
                        .'|liv\\-lines/(?'
                            .'|create/([^/]++)(*:592)'
                            .'|delete/([^/]++)(*:615)'
                        .')'
                        .'|products/delete/([^/]++)(*:648)'
                        .'|reclamation/(?'
                            .'|delete/([^/]++)(*:686)'
                            .'|update/([^/]++)(*:709)'
                        .')'
                        .'|trades/(?'
                            .'|delete/([^/]++)(*:743)'
                            .'|validate/([^/]++)/([^/]++)(*:777)'
                        .')'
                    .')'
                .')'
                .'|/notification/([^/]++)(*:810)'
                .'|/tradelines/delete/([^/]++)(*:845)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        81 => [[['_route' => 'app_admin_categories_update', '_controller' => 'App\\Controller\\AdminController::updateCategory'], ['id'], null, null, false, true, null]],
        103 => [[['_route' => 'app_admin_categories_delete', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], null, null, false, true, null]],
        137 => [[['_route' => 'app_admin_forums_delete', '_controller' => 'App\\Controller\\AdminController::deleteForum'], ['id'], null, null, false, true, null]],
        175 => [[['_route' => 'app_forum_category_update', '_controller' => 'App\\Controller\\ForumController::updateForumCategory'], ['id'], null, null, false, true, null]],
        198 => [[['_route' => 'app_forum_category_delete', '_controller' => 'App\\Controller\\ForumController::deleteForumCategory'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'app_admin_products_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'app_admin_product_update', '_controller' => 'App\\Controller\\AdminController::updateProduct'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'app_admin_response_create', '_controller' => 'App\\Controller\\AdminController::createResponse'], ['reclamation_id'], null, null, false, true, null]],
        310 => [[['_route' => 'app_admin_response_update', '_controller' => 'App\\Controller\\AdminController::updateResponse'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'app_admin_livraison_update', '_controller' => 'App\\Controller\\AdminController::updateLivraison'], ['state', 'id'], null, null, false, true, null]],
        380 => [[['_route' => 'app_forum_update', '_controller' => 'App\\Controller\\ForumController::updateForum'], ['id'], null, null, false, true, null]],
        403 => [[['_route' => 'app_forum_delete', '_controller' => 'App\\Controller\\ForumController::deleteForum'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'app_forum_single', '_controller' => 'App\\Controller\\ForumController::findOneForum'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'app_forum_like', '_controller' => 'App\\Controller\\ForumController::likeForum'], ['id'], null, null, false, true, null]],
        485 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\ForumController::deleteComment'], ['id', 'postId'], null, null, false, true, null]],
        517 => [[['_route' => 'app_comment_update', '_controller' => 'App\\Controller\\ForumController::updateComment'], ['id', 'postId'], null, null, false, true, null]],
        547 => [[['_route' => 'app_product_single', '_controller' => 'App\\Controller\\HomeController::findOne'], ['id'], null, null, false, true, null]],
        592 => [[['_route' => 'app_livraison_lines_create', '_controller' => 'App\\Controller\\LivraisonController::createLivraisonLine'], ['id'], null, null, false, true, null]],
        615 => [[['_route' => 'app_livraison_lines_delete', '_controller' => 'App\\Controller\\LivraisonController::deleteShippingLine'], ['id'], null, null, false, true, null]],
        648 => [[['_route' => 'app_profile_products_delete', '_controller' => 'App\\Controller\\ProfileController::deleteProduct'], ['id'], null, null, false, true, null]],
        686 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::deleteReclamation'], ['id'], null, null, false, true, null]],
        709 => [[['_route' => 'app_reclamation_update', '_controller' => 'App\\Controller\\ReclamationController::updateReclamation'], ['id'], null, null, false, true, null]],
        743 => [[['_route' => 'app_profile_trades_delete', '_controller' => 'App\\Controller\\TradeController::deleteTradeRequest'], ['id'], null, null, false, true, null]],
        777 => [[['_route' => 'app_profile_trades_validate', '_controller' => 'App\\Controller\\TradeController::validateTradeRequest'], ['id', 'action'], null, null, false, true, null]],
        810 => [[['_route' => 'app_notification_single', '_controller' => 'App\\Controller\\NotificationController::findOne'], ['id'], null, null, false, true, null]],
        845 => [
            [['_route' => 'app_trade_lines_delete', '_controller' => 'App\\Controller\\TradeController::deleteLineTrade'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
