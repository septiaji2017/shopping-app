<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Home::contact');
$routes->get('/about', 'Home::about');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/art', 'Home::art');
$routes->get('/music', 'Home::music');
$routes->get('/architecture', 'Home::architecture');
$routes->get('/finance', 'Home::finance');

