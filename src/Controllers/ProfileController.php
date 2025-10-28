<?php

namespace App\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        session_start();
        $this->view("Profile", ['datas' => $_SESSION['auth']]);
    }
}
?>