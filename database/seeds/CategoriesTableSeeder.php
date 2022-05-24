<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = ['Politica', 'Sport', 'Cibo', 'Motori', 'Attualità', 'Benessere', 'Tecnologia', 'Viaggi', 'Natura', 'Nerdaggio'];
        for ($i = 0; $i < 10; $i++) {
            $category = new Category();
            $category->name = $categories[$i];
            $category->colour = $faker->unique()->hexColor();
            $category->save();
        }
    }
}
