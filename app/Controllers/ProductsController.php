<?php

namespace App\Controllers;

use App\Models\Products;
use Symfony\Component\Routing\RouteCollection;

class ProductsController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $products = new Products();
        $products->read($id);

        require_once APP_ROOT . '/views/products.php';
    }
}