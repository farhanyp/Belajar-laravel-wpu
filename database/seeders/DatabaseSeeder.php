<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => "Farhan Yudha Pratama",
            'email' => "farhan@seeder.com",
            'password' => bcrypt('rahasia')
            ]
        );

        User::create([
            'name' => "Yp",
            'email' => "Yp@seeder.com",
            'password' => bcrypt('rahasia')
            ]
        );

        Category::create([
            'name' => "Personal",
            'slug' => "personal"
        ]);

        Category::create([
            'name' => "Web Design",
            'slug' => "web-design"
        ]);

        Category::create([
            'name' => "Teknologi",
            'slug' => "teknologi"
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores...",
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores, ad, dolore commodi veritatis nesciunt amet ipsam hic. Qui eius accusantium ipsam deleniti harum fuga necessitatibus nihil maxime hic?</p><p>Aspernatur tempore laborum nulla iure officia soluta repellat! Quam quos illo enim odio mollitia minus amet id fuga temporibus. Necessitatibus atque perferendis temporibus officiis quidem magni accusantium molestias voluptates quibusdam quasi, cum maiores molestiae nostrum dolorem sequi debitis assumenda illo veniam consequatur sint. Illum nemo tenetur natus, illo quos, similique ab deleniti iusto, ad dolorem nobis. Enim, quasi necessitatibus!<p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores...",
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores, ad, dolore commodi veritatis nesciunt amet ipsam hic. Qui eius accusantium ipsam deleniti harum fuga necessitatibus nihil maxime hic?</p><p>Aspernatur tempore laborum nulla iure officia soluta repellat! Quam quos illo enim odio mollitia minus amet id fuga temporibus. Necessitatibus atque perferendis temporibus officiis quidem magni accusantium molestias voluptates quibusdam quasi, cum maiores molestiae nostrum dolorem sequi debitis assumenda illo veniam consequatur sint. Illum nemo tenetur natus, illo quos, similique ab deleniti iusto, ad dolorem nobis. Enim, quasi necessitatibus!<p>',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores...",
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores, ad, dolore commodi veritatis nesciunt amet ipsam hic. Qui eius accusantium ipsam deleniti harum fuga necessitatibus nihil maxime hic?</p><p>Aspernatur tempore laborum nulla iure officia soluta repellat! Quam quos illo enim odio mollitia minus amet id fuga temporibus. Necessitatibus atque perferendis temporibus officiis quidem magni accusantium molestias voluptates quibusdam quasi, cum maiores molestiae nostrum dolorem sequi debitis assumenda illo veniam consequatur sint. Illum nemo tenetur natus, illo quos, similique ab deleniti iusto, ad dolorem nobis. Enim, quasi necessitatibus!<p>',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores...",
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum id quidem ab sapiente corporis exercitationem! Dolorum officiis a, minus voluptate laboriosam asperiores, ad, dolore commodi veritatis nesciunt amet ipsam hic. Qui eius accusantium ipsam deleniti harum fuga necessitatibus nihil maxime hic?</p><p>Aspernatur tempore laborum nulla iure officia soluta repellat! Quam quos illo enim odio mollitia minus amet id fuga temporibus. Necessitatibus atque perferendis temporibus officiis quidem magni accusantium molestias voluptates quibusdam quasi, cum maiores molestiae nostrum dolorem sequi debitis assumenda illo veniam consequatur sint. Illum nemo tenetur natus, illo quos, similique ab deleniti iusto, ad dolorem nobis. Enim, quasi necessitatibus!<p>',
            'category_id' => 3,
            'user_id' => 2,
        ]);
    }
}
