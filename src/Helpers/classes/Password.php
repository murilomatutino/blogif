<?php

namespace App\Helpers\classes;

class Password
{
    public static function hash($password)
    {
        $options = [
            'const' => 12,
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options);
    }
}

?>