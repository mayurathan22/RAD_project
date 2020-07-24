<?php

use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            'instagram' => 'https://www.instagram.com/instagram/?hl=en',
            'google' => 'https://www.google.com/search?client=opera&q=google&sourceid=opera&ie=UTF-8&oe=UTF-8',
            'pinterest' => 'https://www.pinterest.com',
            'facebook' => 'https://www.google.com/search?client=opera&q=facebook+login&sourceid=opera&ie=UTF-8&oe=UTF-8',
            'twitter' => 'https://twitter.com/login?lang=en',
            'youtube' => 'https://www.youtube.com',
            'tumblr' => 'https://www.tumblr.com',
         ]);
  
    }
}
