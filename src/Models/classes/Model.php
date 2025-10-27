<?php

namespace App\Models\classes;

use App\Models\Connection;
use PDO;

abstract class Model
{
    public static function execute_query(string $query)
    {
        try
        {
            Connection::open();

            $conn = Connection::get_connection();

            $result = $conn->prepare($query);
            $result->execute();
            
            return $result->fetchAll(PDO::FETCH_CLASS, static::class);

            Connection::close();

        }catch(PDOException $e)
        {
            die("erro");
        }
        
    }
}
?>