<?php

namespace Database\Seeders;

use App\Models\BookDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <=10 ; $i++) {
            BookDetail::create([
                'post_title' => $faker->sentence(),
                'books_id' => mt_rand(1,10),
                'category_id' => mt_rand(1,3),
                'author'=>$faker->sentence(),
                'post_description' => $faker->sentence(),
                'image' => 'image_post.jpg',
                'date' => $faker->date(),
                'reading_time' => $faker->time(),
                'body_description' => $faker->paragraph(),
                'link_social_media' => 'instagram.com',
                'link_video' => 'youtube.com'
            ]);
        }
    }
}
