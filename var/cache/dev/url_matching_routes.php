<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/create-product' => [[['_route' => 'create-product', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/create-category' => [[['_route' => 'create-category', '_controller' => 'App\\Controller\\ProductPropertiesController::createCategory'], null, null, null, false, false, null]],
        '/create-company' => [[['_route' => 'create-company', '_controller' => 'App\\Controller\\ProductPropertiesController::createCompany'], null, null, null, false, false, null]],
        '/create-region' => [[['_route' => 'create-region', '_controller' => 'App\\Controller\\ProductPropertiesController::createRegion'], null, null, null, false, false, null]],
        '/create-vine-grape' => [[['_route' => 'create-vine-grape', '_controller' => 'App\\Controller\\ProductPropertiesController::createVineGrape'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/edit\\-product([^/]++)(*:64)'
                .'|/delete\\-product([^/]++)(*:95)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'edit-product', '_controller' => 'App\\Controller\\ProductController::editProduct'], ['id'], null, null, false, true, null]],
        95 => [
            [['_route' => 'delete-product', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
