<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');
$routes->get('home', 'Pages::home');
$routes->get('cnc', 'Pages::cnc');

// Contact form routes
$routes->post('contact/send', 'Contact::sendEmail');
$routes->get('contact/captcha', 'Contact::generateCaptcha');

