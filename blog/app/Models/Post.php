<?php

namespace App\Models;

class Post 
{
    private static $blog_post = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama-blog',
            'author' => 'Hafiz',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsum non officiis fugiat voluptatem! Fuga voluptatem enim nesciunt dolorum pariatur, temporibus quibusdam hic dolorem voluptatibus unde rem libero deserunt exercitationem sequi minima quaerat reprehenderit non doloribus illo debitis quas nihil voluptas! Odit impedit eveniet quisquam eaque quis natus in modi, assumenda earum autem voluptatibus quae ea doloribus, officia, ut magni fuga minima laudantium esse sint optio doloremque animi provident tempore? Cupiditate quod fuga facere quas harum dignissimos perferendis voluptates ut itaque nisi enim a, unde eligendi earum ipsum natus, illum consequuntur nesciunt assumenda sunt quidem vel sint maiores? Eum, molestias.'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua-blog',
            'author' => 'Tika',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsum non officiis fugiat voluptatem! Fuga voluptatem enim nesciunt dolorum pariatur, temporibus quibusdam hic dolorem voluptatibus unde rem libero deserunt exercitationem sequi minima quaerat reprehenderit non doloribus illo debitis quas nihil voluptas! Odit impedit eveniet quisquam eaque quis natus in modi, assumenda earum autem voluptatibus quae ea doloribus, officia, ut magni fuga minima laudantium esse sint optio doloremque animi provident tempore? Cupiditate quod fuga facere quas harum dignissimos perferendis voluptates ut itaque nisi enim a, unde eligendi earum ipsum natus, illum consequuntur nesciunt assumenda sunt quidem vel sint maiores? Eum, molestias.'
        ]
    ];


    public static function all() {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();



        // $new_post = [];
        // foreach (self::$blog_post as $post) {
        //     if ($post["slug"] === $slug) {
        //         $new_post = $post;
        //     }   
        // }
        return $posts->firstWhere('slug',$slug);
    }

}
