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
                'id' => $user->id,
                'social_name' => $user->social_name,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'phone_number' => $user->phone_number,
                'birth_day' => $user->birth_day,
                'email' => $user->email
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

    public static function get_session($label=null)
    {
        session_start();

        if($_SESSION['auth'])
        {
            if ($label == null)
            {
                return $_SESSION['auth'];
            }
            else
            {
                return $_SESSION['auth'][$label];
            }
        }
    }
}

?>