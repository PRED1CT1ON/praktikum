<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hello', 'Hello::index');

// Routes untuk Contact
$routes->get('contact', 'Contact::index');
$routes->get('contact/create', 'Contact::create');
$routes->post('contact/store', 'Contact::store');
$routes->get('contact/edit/(:num)', 'Contact::edit/$1');
$routes->post('contact/update/(:num)', 'Contact::update/$1');
$routes->get('contact/delete/(:num)', 'Contact::delete/$1');

// Routes untuk Blog
$routes->get('blog', 'BlogController::index');
$routes->get('blog/create', 'BlogController::create');
$routes->post('blog/store', 'BlogController::store');
$routes->get('blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('blog/update/(:num)', 'BlogController::update/$1');
$routes->get('blog/delete/(:num)', 'BlogController::delete/$1');
$routes->get('blog/view/(:num)', 'BlogController::view/$1');
$routes->post('blog/comment/(:num)', 'BlogController::comment/$1');
