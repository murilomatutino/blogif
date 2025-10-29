<?php

namespace App\Models\classes;

class User extends Model
{
    public readonly int $id;
    public readonly string $name;
    public readonly string $email;
    public readonly string $password;
    public readonly string $create_at;
    public readonly string $updated_at;


    public static function get_user(string $email)
    {
        return ( self::execute_query("select * from user where email='{$email}'") )[0]; // indicie zero para pegar desconsiderar o array que está em volta do objeto
    }

    public static function create($name, $email, $password)
    {
        $query = " 
        insert into user(name, email, password, create_at, updated_at)
        values
        ('{$name}', '{$email}', '{$password}', now(), now());";

        return self::execute_query($query);
    }
}

?>