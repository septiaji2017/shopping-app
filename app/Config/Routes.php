<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('/cart', 'Home::index');
$routes->post('/cart/add/(:num)', 'Home::add_to_cart/$1');
$routes->post('/cart/clear', 'Home::clear_cart');


