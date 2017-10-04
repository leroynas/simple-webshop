<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 6)->create()->each(function ($c) {
        	factory(App\Product::class, 9)->create(['category_id' => $c->id]);
        });
    }
}
