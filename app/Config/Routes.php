<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/chat', 'pages::chat');
$routes->get('/chat-box', 'pages::chatBox');
$routes->get('/quiz', 'pages::quiz');