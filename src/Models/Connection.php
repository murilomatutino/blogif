<?php

namespace App\Models;

use PDO;

class Connection
{
    private static ?PDO $conn = null;

    public static function open()
    {
        if(!self::$conn)
        {
            self::$conn = new PDO("mysql:host=localhost;dbname=blogif", "root", "root", [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

        return self::$conn;
    }


    public static function get_connection()
    {
        if (self::$conn)
        {
            return self::$conn;
        }
    }

    public static function close()
    {
        if (self::$conn)
        {
            self::$conn = null;
        }
    }

}
?>