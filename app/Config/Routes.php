<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// Route Autentikasi (Publik)
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');

// Grup Route Admin (Dilindungi oleh AuthFilter)
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Admin\DashboardController::index');
    $routes->get('menus', 'Admin\MenuController::index');
    $routes->post('menus/store', 'Admin\MenuController::store');
    $routes->get('menus/delete/(:num)', 'Admin\MenuController::delete/$1');
    $routes->post('menus/save-order', 'Admin\MenuController::saveOrder');
    $routes->get('settings', 'Admin\SettingController::index');
    $routes->post('settings/update', 'Admin\SettingController::update');

    $routes->get('pages', 'Admin\PageController::index');
    $routes->get('pages/create', 'Admin\PageController::create');
    $routes->post('pages/store', 'Admin\PageController::store');
    $routes->get('pages/edit/(:num)', 'Admin\PageController::edit/$1');
    $routes->post('pages/update/(:num)', 'Admin\PageController::update/$1');
    $routes->get('pages/delete/(:num)', 'Admin\PageController::delete/$1');
});

$routes->get('(:any)', 'PageController::view/$1');
