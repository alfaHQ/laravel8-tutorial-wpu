<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "silva tria a.",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quis quaerat quo, nostrum perferendis natus error illo ducimus voluptas, quam blanditiis at mollitia dicta. Velit mollitia, porro non eius aspernatur voluptates, aliquid itaque atque deleniti eligendi perspiciatis repellendus eveniet dolores facere illum? Quidem quod minus, ipsam incidunt rerum aspernatur voluptatum modi a facere consequatur assumenda nulla dignissimos possimus ipsa similique amet eum, eligendi cumque veritatis id corrupti ab beatae necessitatibus. Repudiandae sit nihil provident possimus assumenda aspernatur non quas ducimus!",
        ],

        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "ari dwi yulianto",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, facilis rem. Dignissimos in nobis, suscipit autem unde est eligendi eos corporis harum accusamus modi, iusto vel praesentium laudantium alias, rerum molestias tempore ducimus numquam! Sed culpa sit est vero, neque voluptatibus fuga nisi, ad vel saepe recusandae sapiente mollitia libero nemo tenetur, doloribus id? Possimus quis dolore illo obcaecati. Aliquid expedita eos reprehenderit cupiditate. Ipsam laborum tempora delectus recusandae excepturi atque fuga corrupti placeat, libero consequatur impedit voluptas ad dicta voluptatibus aut nulla voluptatum at vero harum iste quod qui quis. Corporis, provident. Alias reiciendis repellendus voluptas iste non porro!",
        ],
    ];

    public static function all() {
        // untuk manggil property static dalam satu class ( self:: )

        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        
        // untuk manggil fungsi static dalam satu class ( static:: )
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
