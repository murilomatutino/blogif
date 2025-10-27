<?php

namespace App\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        $this->view('Login');
    }

    public function store($request)
    {
        $login = $request->login;
        $password = $request->password;

        echo $login . "<br>";
        echo $password;
    }

}

?>