<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Animals', 'Nature', 'Abstract'];

        foreach ($categories as $category) {
            $cat = new Category();
            $cat->name = $category;
            $cat->slug = Str::slug($category);
            $cat->save();
        }
    }
}
