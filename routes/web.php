<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method' => 'indexAction'), array()));
$routes->add('products', new Route(constant('URL_SUBFOLDER') . '/products/{id}', array('controller' => 'ProductsController', 'method' => 'showAction'), array('id' => '[0-9]+')));
$routes->add('users', new Route(constant('URL_SUBFOLDER') . '/users/{id}', array('controller' => 'UsersController', 'method' => 'showAction'), array('id' => '[0-9]+')));
$routes->add('customers', new Route(constant('URL_SUBFOLDER') . '/customers/{id}', array('controller' => 'CustomersController', 'method' => 'showAction'), array('id' => '[0-9]+')));