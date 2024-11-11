<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/GENOMES', 'Liste::index');

$routes->get('/GENOMES/DATA/(:num)', 'Liste::getSelectedGenome/$1');