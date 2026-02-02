<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();

        User::factory(1)->create();

        $frontend=Category::create([
            'name'=>"frontend",
            'slug'=>"frontend"
        ]);

        $backend=Category::create([
            'name'=>"backend",
            'slug'=>"backend"
        ]);

        Blog::create([
            'title'=>"Frontend Post",
            'slug'=>"Frontend-Post",
            'intro'=>"this is intro",
            'body'=>"this is body and Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente laborum sunt corrupti veritatis sit. Error iste praesentium nihil delectus voluptas aliquid vero commodi adipisci deserunt quas. Praesentium dolore placeat mollitia natus obcaecati dicta ipsum veritatis rem nihil, consectetur ullam minima veniam ab odio perferendis illo debitis cum! Doloremque, vero ad?",
            'category_id'=>$frontend->id
        ]);
        Blog::create([
            'title'=>"Backend Post",
            'slug'=>"Backend-Post",
            'intro'=>"this is intro",
            'body'=>"this is body and Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente laborum sunt corrupti veritatis sit. Error iste praesentium nihil delectus voluptas aliquid vero commodi adipisci deserunt quas. Praesentium dolore placeat mollitia natus obcaecati dicta ipsum veritatis rem nihil, consectetur ullam minima veniam ab odio perferendis illo debitis cum! Doloremque, vero ad?",
            'category_id'=>$backend->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
