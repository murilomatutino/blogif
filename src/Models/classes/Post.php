<?php

namespace App\Models\classes;

class Post extends Model
{
    public readonly int $id;
    public readonly string $title;
    public readonly string $author;
    public readonly string $content;
    public readonly string $create_at;


    public static function all() // pega todos os posts
    {
        return self::execute_query("
        select p.title, p.content, p.id, u.name as author, p.create_at from post p, user u where p.author = u.id
        ");
    }

    public static function create_post($title, $author, $content)
    {
        $query = " 
        insert into post(title, author, content, create_at)
        values
        ('{$title}', '{$author}', '{$content}', now());";

        return self::execute_query($query);
    }
}

?>