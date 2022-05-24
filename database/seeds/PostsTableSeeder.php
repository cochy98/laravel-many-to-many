<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $post = new Post();
            $post->title = $faker->unique()->words(3, true);
            $post->author = $faker->name();
            $post->content = $faker->paragraphs(7, true);
            $post->image_url = "https://picsum.photos/id/$i/450/600";
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
