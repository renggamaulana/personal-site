<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;

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

        // User::factory(10)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Mental Health',
            'slug' => 'mental-health'
        ]);

        Blog::create([
            'title' => 'My First Blog',
            'category_id' => 1,
            'slug' => 'my-first-blog',
            'excerpt' => 'This is my First blog! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempore perferendis ea suscipit maxime dolore ab mollitia deleniti explicabo provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, fuga architecto ut sit temporibus voluptatem cupiditate delectus non ratione aliquam perspiciatis, eligendi expedita, blanditiis itaque dolorum eius reprehenderit! Quis maxime tenetur officia consectetur eveniet illum provident quas dignissimos nostrum itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil corporis perferendis vel optio. Omnis, odio rerum deleniti mollitia maxime inventore et veritatis error debitis aspernatur non nam, reprehenderit velit commodi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem magnam ex voluptatem asperiores, placeat fugiat provident sed culpa nihil cumque ut numquam dolores necessitatibus nostrum qui perferendis, vitae quidem libero aliquam soluta voluptatum praesentium ratione quisquam! Esse eos eum iure recusandae eaque animi a similique velit aliquid nostrum? Cupiditate, quidem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum iste inventore hic. Pariatur consequuntur veniam nemo natus fugiat voluptatem adipisci quis ducimus aliquid officiis delectus voluptatum similique laudantium dolore vero tenetur laboriosam, possimus accusantium quos velit. Fugiat, earum provident.</p>'
        ]);

        Blog::create([
            'title' => 'My Second Blog',
            'category_id' => 2,
            'slug' => 'my-second-blog',
            'excerpt' => 'This is my Second blog! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempore perferendis ea suscipit maxime dolore ab mollitia deleniti explicabo provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, fuga architecto ut sit temporibus voluptatem cupiditate delectus non ratione aliquam perspiciatis, eligendi expedita, blanditiis itaque dolorum eius reprehenderit! Quis maxime tenetur officia consectetur eveniet illum provident quas dignissimos nostrum itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil corporis perferendis vel optio. Omnis, odio rerum deleniti mollitia maxime inventore et veritatis error debitis aspernatur non nam, reprehenderit velit commodi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem magnam ex voluptatem asperiores, placeat fugiat provident sed culpa nihil cumque ut numquam dolores necessitatibus nostrum qui perferendis, vitae quidem libero aliquam soluta voluptatum praesentium ratione quisquam! Esse eos eum iure recusandae eaque animi a similique velit aliquid nostrum? Cupiditate, quidem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum iste inventore hic. Pariatur consequuntur veniam nemo natus fugiat voluptatem adipisci quis ducimus aliquid officiis delectus voluptatum similique laudantium dolore vero tenetur laboriosam, possimus accusantium quos velit. Fugiat, earum provident.</p>'
        ]);

        Blog::create([
            'title' => 'My Third Blog',
            'category_id' => 3,
            'slug' => 'my-third-blog',
            'excerpt' => 'This is my Third blog! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempore perferendis ea suscipit maxime dolore ab mollitia deleniti explicabo provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, fuga architecto ut sit temporibus voluptatem cupiditate delectus non ratione aliquam perspiciatis, eligendi expedita, blanditiis itaque dolorum eius reprehenderit! Quis maxime tenetur officia consectetur eveniet illum provident quas dignissimos nostrum itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil corporis perferendis vel optio. Omnis, odio rerum deleniti mollitia maxime inventore et veritatis error debitis aspernatur non nam, reprehenderit velit commodi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem magnam ex voluptatem asperiores, placeat fugiat provident sed culpa nihil cumque ut numquam dolores necessitatibus nostrum qui perferendis, vitae quidem libero aliquam soluta voluptatum praesentium ratione quisquam! Esse eos eum iure recusandae eaque animi a similique velit aliquid nostrum? Cupiditate, quidem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum iste inventore hic. Pariatur consequuntur veniam nemo natus fugiat voluptatem adipisci quis ducimus aliquid officiis delectus voluptatum similique laudantium dolore vero tenetur laboriosam, possimus accusantium quos velit. Fugiat, earum provident.</p>'
        ]);

        Blog::create([
            'title' => 'My Fourth Blog',
            'category_id' => 1,
            'slug' => 'my-fourth-blog',
            'excerpt' => 'This is my Fourth blog! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat tempore perferendis ea suscipit maxime dolore ab mollitia deleniti explicabo provident.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, fuga architecto ut sit temporibus voluptatem cupiditate delectus non ratione aliquam perspiciatis, eligendi expedita, blanditiis itaque dolorum eius reprehenderit! Quis maxime tenetur officia consectetur eveniet illum provident quas dignissimos nostrum itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil corporis perferendis vel optio. Omnis, odio rerum deleniti mollitia maxime inventore et veritatis error debitis aspernatur non nam, reprehenderit velit commodi!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem magnam ex voluptatem asperiores, placeat fugiat provident sed culpa nihil cumque ut numquam dolores necessitatibus nostrum qui perferendis, vitae quidem libero aliquam soluta voluptatum praesentium ratione quisquam! Esse eos eum iure recusandae eaque animi a similique velit aliquid nostrum? Cupiditate, quidem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum iste inventore hic. Pariatur consequuntur veniam nemo natus fugiat voluptatem adipisci quis ducimus aliquid officiis delectus voluptatum similique laudantium dolore vero tenetur laboriosam, possimus accusantium quos velit. Fugiat, earum provident.</p>'
        ]);
    }
}
