<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Route qui montres tous les génomes de dingues
$routes->get('/liste', 'Liste::index');

