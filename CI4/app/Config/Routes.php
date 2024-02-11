<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pathshala', 'Home::pathshala');
$routes->get('/team', 'Home::memberPage');
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Home::index');
