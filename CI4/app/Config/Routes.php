<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/team', 'Home::memberPage');
$routes->get('/koshish-pathshala', 'Home::pathshala');
$routes->get('/koshish-collectdkure', 'Home::collectdkure');
$routes->get('/koshish-sales', 'Home::sales');
$routes->get('/koshish-marketing', 'Home::marketing');
$routes->get('/koshish-finance', 'Home::finance');
$routes->get('/koshish-art-and-craft', 'Home::artCraft');
$routes->get('/koshish-hr', 'Home::hr');
$routes->get('/react', 'React::index');