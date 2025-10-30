<?php

namespace App\Controllers;

use App\Models\classes\User;
use App\Helpers\classes\Password;
use App\Helpers\classes\Auth;
use App\Helpers\classes\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        $this->view('Login');
    }

    public function store($request)
    {
        $login = $request->email;
        $password = $request->password;

        $user = User::get_user($login);

        if(!$user)
        {
            die("Usuário não cadastrado");
        }

        if(!password_verify($password, $user->password))
        {
            die("Senha incorreta");
        }
        
        Auth::login_as($user);
        Redirect::to('/');
    }

    public function destroy()
    {
        Auth::logout();
    }

}

?>