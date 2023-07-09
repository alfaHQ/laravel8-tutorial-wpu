<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "name" => "alfa",
            "username" => "alfhabet",
            "email" => "alfacode@gmail.com",
            "password" => bcrypt("password"),
        ]);

        // User::create([
        //     "name" => "Jizatul Salma F.",
        //     "email" => "anugerahtercantiek@gmail.com",
        //     "password" => bcrypt("12345"),
        // ]);

        User::factory(3)->create();
        Post::factory(20)->create();

        Category::create([
            "name" => "Programming",
            "slug" => "programming",
        ]);

        Category::create([
            "name" => "Web Design",
            "slug" => "web-design",
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        // Post::create([
        //     "title" => "Post satu",
        //     "slug" => "post-satu",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. ",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. Distinctio laudantium excepturi ratione voluptas. Numquam sunt et fugit magni aut molestias officia totam dicta alias id dolorem, quae, illo facere. Dolorem, accusantium sit rem ab alias provident ipsa placeat itaque a fugiat eligendi facere quam, possimus eum sequi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illum inventore quaerat molestias repellat. Ex, sunt, iste quisquam, fugiat itaque saepe aperiam in laborum debitis aliquam inventore minus minima! Reiciendis, deleniti a! Dignissimos eveniet tempora aliquid totam dicta corporis voluptatibus provident nesciunt consectetur, sapiente iusto eos labore repudiandae perferendis facere!</p>",
        //     "category_id" => 1,
        //     "user_id" => 1,
        // ]);

        // Post::create([
        //     "title" => "Post dua",
        //     "slug" => "post-dua",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. ",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. Distinctio laudantium excepturi ratione voluptas. Numquam sunt et fugit magni aut molestias officia totam dicta alias id dolorem, quae, illo facere. Dolorem, accusantium sit rem ab alias provident ipsa placeat itaque a fugiat eligendi facere quam, possimus eum sequi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illum inventore quaerat molestias repellat. Ex, sunt, iste quisquam, fugiat itaque saepe aperiam in laborum debitis aliquam inventore minus minima! Reiciendis, deleniti a! Dignissimos eveniet tempora aliquid totam dicta corporis voluptatibus provident nesciunt consectetur, sapiente iusto eos labore repudiandae perferendis facere!</p>",
        //     "category_id" => 1,
        //     "user_id" => 1,
        // ]);

        // Post::create([
        //     "title" => "Post tiga",
        //     "slug" => "post-tiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. ",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. Distinctio laudantium excepturi ratione voluptas. Numquam sunt et fugit magni aut molestias officia totam dicta alias id dolorem, quae, illo facere. Dolorem, accusantium sit rem ab alias provident ipsa placeat itaque a fugiat eligendi facere quam, possimus eum sequi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illum inventore quaerat molestias repellat. Ex, sunt, iste quisquam, fugiat itaque saepe aperiam in laborum debitis aliquam inventore minus minima! Reiciendis, deleniti a! Dignissimos eveniet tempora aliquid totam dicta corporis voluptatibus provident nesciunt consectetur, sapiente iusto eos labore repudiandae perferendis facere!</p>",
        //     "category_id" => 3,
        //     "user_id" => 1,
        // ]);

        // Post::create([
        //     "title" => "Post empat",
        //     "slug" => "post-empat",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. ",
        //     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor possimus aliquid quas excepturi mollitia, suscipit ad voluptatum laborum facere necessitatibus magnam non voluptatem, unde vitae a ea laudantium reprehenderit eveniet nesciunt. Distinctio laudantium excepturi ratione voluptas. Numquam sunt et fugit magni aut molestias officia totam dicta alias id dolorem, quae, illo facere. Dolorem, accusantium sit rem ab alias provident ipsa placeat itaque a fugiat eligendi facere quam, possimus eum sequi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel illum inventore quaerat molestias repellat. Ex, sunt, iste quisquam, fugiat itaque saepe aperiam in laborum debitis aliquam inventore minus minima! Reiciendis, deleniti a! Dignissimos eveniet tempora aliquid totam dicta corporis voluptatibus provident nesciunt consectetur, sapiente iusto eos labore repudiandae perferendis facere!</p>",
        //     "category_id" => 3,
        //     "user_id" => 2,
        // ]);
    }
}
