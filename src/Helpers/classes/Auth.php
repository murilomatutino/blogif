<?php

namespace App\Helpers\classes;

use App\Models\classes\User;
use App\Helpers\classes\Redirect;

class Auth
{
    public static function login_as(User $user)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (!isset($_SESSION['auth'])) {
            $_SESSION['auth'] = [
                'name' => $user->name,
                'email' => $user->email,
                'id' => $user->id,
            ];
        }
    }


    public static function auth()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        return $_SESSION['auth'] ?? null;
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

    public static function get_session($label=null)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (isset($_SESSION['auth'])) {
            if ($label == null) {
                return $_SESSION['auth'];
            } else {
                return $_SESSION['auth'][$label] ?? null;
            }
        }
    }
}

?>