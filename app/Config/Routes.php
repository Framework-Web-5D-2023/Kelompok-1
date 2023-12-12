<?php
use CodeIgniter\Router\RouteCollection;

// CustomersController
$routes->get('/', 'CustomersController::login');
$routes->post('loginAction', 'CustomersController::loginAction');
$routes->post('create', 'CustomersController::register');
$routes->get('dashboard', 'CustomersController::index');

$routes->group('products', function ($routes) {
	$routes->get('/', 'ProductsController::index');
	$routes->post('create', 'ProductsController::create');
	$routes->get('update/(:num)', 'ProductsController::update/$1');
	$routes->post('updateAction/(:num)', 'ProductsController::updateAction/$1');
	$routes->get("destroy/(:num)", 'ProductsController::destroy/$1');
	$routes->get('form', 'ProductsController::form');
	$routes->post('formAction', 'ProductsController::formAction');
	$routes->get('(:num)', 'ProductsController::detail/$1');
});

