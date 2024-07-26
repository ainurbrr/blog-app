<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ainur Bahtiar',
            'username' => 'ainurbrr',
            'email' => 'ainurbahtiarr@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Ainur New',
        //     'email' => 'test1@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, odit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid explicabo voluptatem ex dolore cumque sint eveniet dolores corporis eius repudiandae voluptates nisi dolor beatae reprehenderit, saepe, numquam,</p> <p>perspiciatis itaque ipsam repellat voluptas recusandae. Accusantium ut saepe id quae necessitatibus enim. Debitis accusantium sequi id ullam maxime voluptatem mollitia ipsa ipsum! Non totam laudantium quod animi, sit illo neque nobis? Cupiditate ex natus optio maiores incidunt, corporis eos debitis, facilis aperiam perspiciatis eius blanditiis exercitationem impedit nobis ut harum dignissimos nihil sed culpa veniam? Deleniti autem assumenda minus sint quis molestias explicabo qui placeat, ea, animi inventore similique quo amet unde.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsa quo earum veritatis, ratione praesentium ab minima quam natus ullam quidem atque, laborum eius officia deserunt quibusdam dolore? At vel eum sed non, eius laboriosam sequi neque, cum delectus ipsa nemo quibusdam exercitationem. Blanditiis quaerat quisquam autem nostrum ducimus neque dolores nulla amet, labore dolorum a, quo magnam veritatis perspiciatis tempore necessitatibus? Omnis iste officia, distinctio eius ex aspernatur aperiam!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, odit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid explicabo voluptatem ex dolore cumque sint eveniet dolores corporis eius repudiandae voluptates nisi dolor beatae reprehenderit, saepe, numquam,</p> <p>perspiciatis itaque ipsam repellat voluptas recusandae. Accusantium ut saepe id quae necessitatibus enim. Debitis accusantium sequi id ullam maxime voluptatem mollitia ipsa ipsum! Non totam laudantium quod animi, sit illo neque nobis? Cupiditate ex natus optio maiores incidunt, corporis eos debitis, facilis aperiam perspiciatis eius blanditiis exercitationem impedit nobis ut harum dignissimos nihil sed culpa veniam? Deleniti autem assumenda minus sint quis molestias explicabo qui placeat, ea, animi inventore similique quo amet unde.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsa quo earum veritatis, ratione praesentium ab minima quam natus ullam quidem atque, laborum eius officia deserunt quibusdam dolore? At vel eum sed non, eius laboriosam sequi neque, cum delectus ipsa nemo quibusdam exercitationem. Blanditiis quaerat quisquam autem nostrum ducimus neque dolores nulla amet, labore dolorum a, quo magnam veritatis perspiciatis tempore necessitatibus? Omnis iste officia, distinctio eius ex aspernatur aperiam!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, odit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid explicabo voluptatem ex dolore cumque sint eveniet dolores corporis eius repudiandae voluptates nisi dolor beatae reprehenderit, saepe, numquam,</p> <p>perspiciatis itaque ipsam repellat voluptas recusandae. Accusantium ut saepe id quae necessitatibus enim. Debitis accusantium sequi id ullam maxime voluptatem mollitia ipsa ipsum! Non totam laudantium quod animi, sit illo neque nobis? Cupiditate ex natus optio maiores incidunt, corporis eos debitis, facilis aperiam perspiciatis eius blanditiis exercitationem impedit nobis ut harum dignissimos nihil sed culpa veniam? Deleniti autem assumenda minus sint quis molestias explicabo qui placeat, ea, animi inventore similique quo amet unde.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsa quo earum veritatis, ratione praesentium ab minima quam natus ullam quidem atque, laborum eius officia deserunt quibusdam dolore? At vel eum sed non, eius laboriosam sequi neque, cum delectus ipsa nemo quibusdam exercitationem. Blanditiis quaerat quisquam autem nostrum ducimus neque dolores nulla amet, labore dolorum a, quo magnam veritatis perspiciatis tempore necessitatibus? Omnis iste officia, distinctio eius ex aspernatur aperiam!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, odit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid explicabo voluptatem ex dolore cumque sint eveniet dolores corporis eius repudiandae voluptates nisi dolor beatae reprehenderit, saepe, numquam,</p> <p>perspiciatis itaque ipsam repellat voluptas recusandae. Accusantium ut saepe id quae necessitatibus enim. Debitis accusantium sequi id ullam maxime voluptatem mollitia ipsa ipsum! Non totam laudantium quod animi, sit illo neque nobis? Cupiditate ex natus optio maiores incidunt, corporis eos debitis, facilis aperiam perspiciatis eius blanditiis exercitationem impedit nobis ut harum dignissimos nihil sed culpa veniam? Deleniti autem assumenda minus sint quis molestias explicabo qui placeat, ea, animi inventore similique quo amet unde.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque ipsa quo earum veritatis, ratione praesentium ab minima quam natus ullam quidem atque, laborum eius officia deserunt quibusdam dolore? At vel eum sed non, eius laboriosam sequi neque, cum delectus ipsa nemo quibusdam exercitationem. Blanditiis quaerat quisquam autem nostrum ducimus neque dolores nulla amet, labore dolorum a, quo magnam veritatis perspiciatis tempore necessitatibus? Omnis iste officia, distinctio eius ex aspernatur aperiam!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    
    }
}
