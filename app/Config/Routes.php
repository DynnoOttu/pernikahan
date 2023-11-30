<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('create-db', function () {
    $forge = \Config\Database::forge();

    if ($forge->createDatabase('pernikahan')) {
        echo 'Database created!';
    }
});



$routes->get('/', 'Home::index');
$routes->get('gawe', 'Gawe::index');
$routes->get('gawe/add', 'Gawe::create');
$routes->post('gawe', 'Gawe::store');
