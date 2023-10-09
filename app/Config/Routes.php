<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->get('login', 'Home::login');
$routes->post('login', 'Home::loginPost');

$routes->get('register', 'Home::register');
$routes->post('register', 'Home::registerPost');

$routes->get('form', 'Home::form');

$routes->get('pdf', 'PDFController::viewPDF');
<<<<<<< HEAD
=======

$routes->get('logout', 'Home::logout');

>>>>>>> 6e527b6 (logout change)
