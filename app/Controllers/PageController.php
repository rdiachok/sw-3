<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
	// Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$routeToProducts = str_replace('{id}', 1, $routes->get('products')->getPath());
		$routeToUsers = str_replace('{id}', 1, $routes->get('users')->getPath());
		$routeToCustomers = str_replace('{id}', 1, $routes->get('customers')->getPath());

		require_once APP_ROOT . '/views/home.php';
	}
}