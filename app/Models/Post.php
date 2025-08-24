<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'judul' => 'Judul Artikel 1',
                'author' => 'Eko Kurniawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam distinctio ipsa aperiam, accusantium temporibus perferendis quod fugit porro dolores quae harum. Sit similique, eius neque excepturi itaque accusantium porro ipsa?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'judul' => 'Judul Artikel 2',
                'author' => 'Dodi Setiawan',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate neque repellendus est odio quibusdam libero non iste mollitia modi accusamus! Nemo exercitationem ab a similique accusantium esse id voluptatum tenetur?'
            ]
            ];
    }
    public static function find($slug)
    {
    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

    if (!$post){
        abort(404);
    }
    return $post;
    }
}