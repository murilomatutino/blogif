<?php

namespace App\Models\classes;

class Post extends Model
{
    public readonly int $id;
    public readonly string $title;
    public readonly string $author;
    public readonly string $content;
    public readonly string $create_at;
    public readonly string $summary;


    public static function all() // pega todos os posts
    {
        return self::execute_query("
        select p.title, p.summary, p.content, p.id, u.social_name as author, p.create_at from post p, user u where p.author = u.id
        ");
    }

    public static function Specific($id) // pega um post
    {
        return self::execute_query("
        select p.title, p.content, p.id, u.social_name as author, p.create_at from post p, user u where p.author = u.id and p.id = '$id'
        ")[0];
    }

    public static function create($title, $author, $content, $summary)
    {
        $query = " 
        insert into post(title, author, content, summary, create_at)
        values
        ('{$title}', '{$author}', '{$content}', '{$summary}',now());";

        return self::execute_query($query);
    }
}

?>