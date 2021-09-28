<?php

namespace App\Controllers;

use App\Models\Customers;
use Symfony\Component\Routing\RouteCollection;

class CustomersController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $customers = new Customers();
        $customers->read($id);

        require_once APP_ROOT . '/views/customers.php';
    }
}