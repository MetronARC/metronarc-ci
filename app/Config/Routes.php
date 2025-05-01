<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');

// Contact form routes
$routes->post('contact/send', 'Contact::sendEmail');
$routes->get('contact/captcha', 'Contact::generateCaptcha');

