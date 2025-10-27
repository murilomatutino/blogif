<?php

namespace App\Controllers;

use App\Models\classes\User;
use App\Models\Connection;

class HomeController extends Controller
{
    public function index()
    {
        $this->view("Home");
    }
}

?>