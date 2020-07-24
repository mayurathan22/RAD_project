<?php

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
        DB::table('categories')->insert([
            'name' => 'Motors',
            'photo' => 'https://www.medallionenergy.com/medallion/wp-content/uploads/2016/11/pool-pump-shot.jpg',
            
         ]);
  
         DB::table('categories')->insert([
             'name' => 'Chemichels',
             'photo' => 'https://www.a1poolcare.com/wp-content/uploads/sites/517/2017/08/swimming-pool-service-equipment.jpg',
             
         ]);
  
         DB::table('categories')->insert([
             'name' => 'Filters',
             'photo' => 'https://s3.amazonaws.com/tai-epminerals-blue-production/assets/images/images/104/original/Nice-Pool_600x450.jpg?1442864908',
             
         ]);
    }
}
