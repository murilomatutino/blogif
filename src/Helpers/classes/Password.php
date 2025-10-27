<?php

namespace App\Helpers\classes;

class Password
{
    public function hash($password)
    {
        $options = [
            'const' => 12,
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }
}

?>