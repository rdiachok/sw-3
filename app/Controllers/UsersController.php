<?php

namespace App\Controllers;

use App\Models\Users;
use Symfony\Component\Routing\RouteCollection;

class UsersController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $users = new Users();
        $users->read($id);

        require_once APP_ROOT . '/views/users.php';
    }
}