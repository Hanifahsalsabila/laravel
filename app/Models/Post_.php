<?php

namespace App\Models;


class Post 
{
    private static $posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Hanifah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae obcaecati a at. Provident adipisci ex rem officiis rerum magni assumenda minus, dolores velit voluptas perspiciatis atque ipsam non temporibus beatae."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Arkana Putra Mahendra",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio quis repellat aliquam accusamus eos voluptates excepturi fuga suscipit, consectetur, eius unde atque totam quia illo dolore molestias iusto sint, rerum aliquid odit vero? Culpa dolorum perspiciatis eos cumque quod expedita amet ad eligendi corrupti reprehenderit odio quas nemo ab aperiam doloremque voluptatum sed, laborum repellat? Impedit maxime ipsa, mollitia praesentium quibusdam animi quis ratione distinctio eos perferendis maiores nemo laudantium placeat repudiandae velit doloribus ad possimus recusandae? Sunt atque quam quas praesentium iste, non laudantium veritatis similique laboriosam dolorum? Accusamus voluptatem eum iste quibusdam fuga temporibus cupiditate vel doloribus suscipit!"
        ]
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}


