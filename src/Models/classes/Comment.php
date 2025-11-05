<?php

namespace App\Models\classes;

class Comment extends Model
{
    public readonly int $id;
    public readonly string $id_post;
    public readonly string $author;
    public readonly string $content;
    public readonly string $create_at;

    public static function all() // pega todos os posts
    {
        return self::execute_query("
        select m.id, m.id_post, m.content, u.social_name as author from comment m, user u where u.id = m.author;
        ");
    }


    public static function create($id_post, $author, $content)
    {
        $query = " 
        insert into comment(id_post, author, content, create_at)
        values
        ('{$id_post}', '{$author}', '{$content}', now());";

        return self::execute_query($query);
    }
}
?>