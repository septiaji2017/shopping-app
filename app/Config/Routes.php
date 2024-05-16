<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('/cart', 'Home::index');
$routes->get('/checkout', 'Home::form');
$routes->post('/cart/add/(:num)', 'Home::add_to_cart/$1');
$routes->post('/cart/clear', 'Home::clear_cart');
$routes->post('/cart/update_quantity', 'Home::update_quantity');
$routes->post('/cart/delete_item', 'Home::delete_item');



