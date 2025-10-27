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
}

?>