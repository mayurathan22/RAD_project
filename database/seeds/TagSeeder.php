<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Recommended',
                        
         ]);
  
         DB::table('tags')->insert([
             'name' => 'New Arrivals',
                         
         ]);
  
         DB::table('tags')->insert([
             'name' => 'Best Sellers',
             
         ]);
    }
}
