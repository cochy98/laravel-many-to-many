<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\Post;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // ? Prendo tutti gli id disponibili in categories
        $category_ids = Category::pluck('id')->toArray();

        // § Prendo tutti gli id disponibili in categories
        $posts = Post::all();

        foreach ($posts as $post) {
            $post->categories()->sync($faker->randomElements($category_ids, 1));
        }
    }
}
