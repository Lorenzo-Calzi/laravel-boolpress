<?php

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<20; $i++) { 
            $post = new Post;
            $post->user_image = $faker->imageUrl(600, 300, 'post', true);
            $post->user_name = $faker->words(2, true);
            $post->followers = $faker->numberBetween(1, 100000);
            $post->publication_data = $faker->randomDigitNotNull();
            $post->post_type = $faker->randomElement(['Modificato', 'Post Sponsorizzato', '']);
            $post->post_image = $faker->imageUrl(100, 100, 'post', true);
            $post->description = $faker->paragraph();
            $post->save();
        }
    }
}
