<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Ainur",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum similique necessitatibus voluptatem eos, fugiat enim rerum veritatis quis tenetur, cupiditate libero, impedit molestiae sit eum animi rem reiciendis facere. Excepturi beatae dolorum accusamus similique mollitia possimus dolor eum tenetur culpa id adipisci minima amet sequi rerum dolore necessitatibus porro architecto veritatis voluptatibus, reiciendis commodi dolores placeat? Atque rerum nesciunt earum! Voluptatem quo facilis excepturi placeat praesentium repellendus consectetur eos, accusantium eius id! Inventore vero sunt eum delectus saepe alias unde.",
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "PPP",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum omnis, laboriosam fugiat veritatis perferendis cupiditate obcaecati quae quidem nisi aperiam placeat, commodi aliquam enim voluptas perspiciatis beatae adipisci blanditiis quam et autem animi. Delectus voluptas quo pariatur ut non nihil excepturi cumque. Obcaecati esse sint consectetur provident quasi maxime, temporibus minus. Nostrum saepe laudantium, neque explicabo magnam dolore, sit nulla tempore quibusdam commodi iste, facere delectus minus architecto error id. Saepe ipsum autem doloribus ipsa, ut voluptas facere earum laborum consequatur in. Adipisci, et placeat! Suscipit dolor quasi nobis voluptatem dolorem doloremque, nemo facere autem est! Quas molestias beatae dolores!",
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts= static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}