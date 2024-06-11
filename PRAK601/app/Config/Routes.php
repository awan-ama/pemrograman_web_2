<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->group('login', ['filter' => 'redirectAuth'], function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->post('/', 'Login::auth');
});
$routes->group('register', function ($routes) {
    $routes->get('/', 'Register::index');
    $routes->post('/', 'Register::save');
});
$routes->group('logout', function ($routes) {
    $routes->get('/', 'Logout::index');
});
$routes->get('/register', 'Register::index', ['filter' => 'redirectAuth']);
$routes->group('user', ['filter' => 'auth'], function($routes,){
	$routes->get('', 'BukuUser::home');
	$routes->get('buku', 'BukuUser::index');
    $routes->add('buku/new', 'BukuUser::create');
	$routes->add('buku/(:segment)/edit', 'BukuUser::edit/$1',);
	$routes->get('buku/(:segment)/delete', 'BukuUser::delete/$1');
});