<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->post('login', 'Home::loginPost');

$routes->get('register', 'Home::register');
$routes->post('register', 'Home::registerPost');

$routes->get('form', 'Home::form');

$routes->get('pdf', 'PDFController::viewPDF');

$routes->get('logout', 'Home::logout');

$routes->get('user', 'User::index');

$routes->get('form_admin', 'From_admin::form_admin');
