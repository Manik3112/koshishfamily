<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/team', 'Home::memberPage');

$routes->get('/pathshala', 'React::pathshala');
$routes->get('/collectdkure', 'React::collection');
$routes->get('/art-and-craft', 'React::arts');
