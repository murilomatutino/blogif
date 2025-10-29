<?php

namespace App\Controllers;

use App\Models\classes\User;
use App\Helpers\classes\Password;
use App\Helpers\classes\Redirect;

class RegisterController extends Controller
{
    public function index()
    {
        $this->view("Register");
    }

    public function store($request)
    {
        $password = Password::hash($request->password);
        User::create(
            $request->name,
            $request->email,
            $password
        );

        Redirect::to('/login');
    }
}
?>