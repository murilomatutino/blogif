<?php

namespace App\Helpers\classes;

class Redirect
{
    public static function to($path)
    {
        header("Location: {$path}");
    }

    public static function back()
    {
        self::to($_SERVER['HTTP_REFERER']);
    }
}

?>