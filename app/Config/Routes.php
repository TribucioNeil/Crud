<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::Tribucio');
$routes->get('/product/(:any)', 'ProductController::product/$1');

