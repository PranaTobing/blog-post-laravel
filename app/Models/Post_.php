<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Prana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat molestias libero id, molestiae dicta sint quasi voluptates quos, soluta corrupti itaque sunt iusto reiciendis eveniet reprehenderit unde iure exercitationem dolorem."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vel dicta repudiandae nostrum ut quidem"
            "author" => "Tobing",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vel dicta repudiandae nostrum ut quidem? Inventore minima illo facere obcaecati et id aut qui necessitatibus nemo sequi consectetur omnis commodi, doloremque non, ab velit. Dolore nulla et molestiae repellat. Cumque ipsum aliquam, non earum distinctio soluta? Tenetur fuga officiis soluta odio consequatur facilis ducimus pariatur dolor ullam unde, sunt quis error molestias deserunt non eveniet amet voluptatum dignissimos. Facere maiores eius ducimus natus, laudantium officiis at consectetur. Sed quas, dicta iure ad ducimus ut odio quasi totam neque reprehenderit eius illum assumenda quo repellendus temporibus ullam perspiciatis. Voluptates nam vel enim, quas obcaecati aliquid necessitatibus nesciunt eum facere cupiditate! Saepe tempora quis, optio, voluptatem ad omnis modi laboriosam vitae expedita dicta amet porro voluptatum fugit debitis nesciunt, nihil consequuntur quod. Ab necessitatibus nostrum similique esse, adipisci non ut quas autem aliquam sed amet distinctio ratione voluptates, dolores rerum nihil. Qui nam ad in ipsam quae atque natus culpa. Non cumque ad debitis pariatur exercitationem! In id accusantium optio temporibus facilis, voluptatum ex laudantium, praesentium molestias eveniet nostrum fugiat tenetur! Exercitationem nulla minima excepturi hic ex voluptatem reprehenderit veritatis ullam? Excepturi sed sunt earum non voluptatibus, accusamus quod repellat adipisci distinctio doloribus quas mollitia, unde esse libero. Hic accusantium, et vero cupiditate facilis veniam, quasi beatae vitae asperiores quis necessitatibus. Velit pariatur, esse maxime porro quam vitae nisi sequi ducimus recusandae, temporibus error aut voluptate voluptatem nobis! Quae vel repellendus nobis assumenda amet. Nesciunt quas tempora veniam quo, iste eaque sint itaque ut possimus facere inventore odit similique autem asperiores voluptatem quam earum ipsam quae minima. Id vel eveniet labore cupiditate nemo, tempora reiciendis dolorum est architecto quam iusto nostrum reprehenderit earum assumenda illo inventore molestiae."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
    App\Models\Post::create([
            "title" => "Judul Tulisan Ketiga",
            "category_id" => 3,
            "slug" => "judul-tulisan-ketiga",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, vel dicta repudiandae nostrum ut quidem",
            "body" => "<p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit</b>. Asperiores, vel dicta repudiandae nostrum ut quidem? Inventore minima illo facere obcaecati et id aut qui necessitatibus nemo sequi consectetur omnis commodi, doloremque non, ab velit.</p><p> Dolore nulla et molestiae repellat. Cumque ipsum aliquam, non earum distinctio soluta? Tenetur fuga officiis soluta odio consequatur facilis ducimus pariatur dolor ullam unde, sunt quis error molestias deserunt non eveniet amet voluptatum dignissimos. Facere maiores eius ducimus natus, laudantium officiis at consectetur.</p><p>Sed quas, dicta iure ad ducimus ut odio quasi totam neque reprehenderit eius illum assumenda quo repellendus temporibus ullam perspiciatis. Voluptates nam vel enim, quas obcaecati aliquid necessitatibus nesciunt eum facere cupiditate! Saepe tempora quis, optio, voluptatem ad omnis modi laboriosam vitae expedita dicta amet porro voluptatum fugit debitis nesciunt, nihil consequuntur quod. Ab necessitatibus nostrum similique esse, adipisci non ut quas autem aliquam sed amet distinctio ratione voluptates, dolores rerum nihil. Qui nam ad in ipsam quae atque natus culpa. Non cumque ad debitis pariatur exercitationem! In id accusantium optio temporibus facilis, voluptatum ex laudantium, praesentium molestias eveniet nostrum fugiat tenetur!</p><p> Exercitationem nulla minima excepturi hic ex voluptatem reprehenderit veritatis ullam? Excepturi sed sunt earum non voluptatibus, accusamus quod repellat adipisci distinctio doloribus quas mollitia, unde esse libero. Hic accusantium, et vero cupiditate facilis veniam, quasi beatae vitae asperiores quis necessitatibus. Velit pariatur, esse maxime porro quam vitae nisi sequi ducimus recusandae, temporibus error aut voluptate voluptatem nobis! Quae vel repellendus nobis assumenda amet. Nesciunt quas tempora veniam quo, iste eaque sint itaque ut possimus facere inventore odit similique autem asperiores voluptatem quam earum ipsam quae minima. Id vel eveniet labore cupiditate nemo, tempora reiciendis dolorum est architecto quam iusto nostrum reprehenderit earum assumenda illo inventore molestiae.</p>"
        ])
    */
}
