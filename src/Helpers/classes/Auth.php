<?php

namespace App\Helpers\classes;

use App\Models\classes\User;
use App\Helpers\classes\Redirect;

class Auth
{
    public static function login_as(User $user)
    {
        session_start();

        if(!$_SESSION['auth'])
        {
            $_SESSION['auth'] = [
                'name' => $user->name,
                'email' => $user->email,
                'id' => $user->id
            ];
        }
    }


    public static function auth()
    {
        session_start();
        return $_SESSION['auth'];
    }

    public static function logout()
    {
        session_start();
        
        var_dump(isset($_SESSION['auth']));
        if (isset($_SESSION['auth']))
        {
            echo "destruiu";
            unset($_SESSION['auth']);
            
            Redirect::to('/login');
        }
    }
}

?>