<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'description' => 'Award winning swimming pool construction company in Sri Lanka',
            'photo' => 'http://static.asiawebdirect.com/m/phuket/portals/www-singapore-com/homepage/top10/top10-best-hotel-pools/allParagraphs/00/top10Set/02/image/w-singapore-sentosa-cove.jpg',
            
         ]);
  
         DB::table('blogs')->insert([
             'description' => 'We are one of the oldest pool builders in Sri Lanka',
             'photo' => 'http://www.cordishotels.com/cdn-4fdf5bc1/globalassets/cordis/cd-hongkong/wellness/wellness-pool-1680x945.jpg',
             
         ]);
  
         DB::table('blogs')->insert([
             'description' => 'Ten Mistakes People Make When Hiring a Contractor To Build a Swimming Pool',
             'photo' => 'https://www.lunahotel.com/images/hotel-luna-pool-03-z.jpg',
             
         ]);

         DB::table('blogs')->insert([
            'description' => 'Before you do, make sure your pool is looking and functioning great.',
            'photo' => 'http://www.discoveryshoresboracay.com/files/2015/05/Swimming-Pool.jpg',
            
        ]);

        DB::table('blogs')->insert([
            'description' => 'Swimming pools are constructed with concrete as a material for residential as well as hotels, clubs and schools.',
            'photo' => 'https://thehkshopper.com/wp-content/uploads/2016/11/langham-pool.jpg',
        ]);

        DB::table('blogs')->insert([
            'description' => 'A swimming pool is a water retaining structure used for purposes such as leisure and exercise. ',
            'photo' => 'http://www.cashfortraveling.net/wp-content/uploads/2015/10/W-Bangkok-Swimming-Pool-Bangkok.jpg'            
        ]);

        DB::table('blogs')->insert([
            'description' => 'Master your Swim Technique for Faster Speed and Better Stroke Efficiency! Push off force. ',
            'photo' => 'https://www.iletours.com/wp-content/uploads/2018/11/belmond-luxury-hotel-pool-peru-s-colca-canyon.jpg'            
        ]);

        DB::table('blogs')->insert([
            'description' => ' Every swimming pool is unique and requires a custom construction project ... ',
            'photo' => 'https://www.rw-luxuryhotels.com/wp-content/uploads/2017/01/%C2%A9-Viceroy-Bali-luxury-hotel-Ubud-RW-Luxury-Hotels-Resorts-Main_Pool_Evening2-1200x482.jpg',            
        ]);

        DB::table('blogs')->insert([
            'description' => 'We Build University Pools, Rooftop Hotels, Resort Pools and more. ',
            'photo' => 'http://globeachiever.com/wp-content/uploads/2018/09/hawa2-1.jpg',            
        ]);

        DB::table('blogs')->insert([
            'description' => 'Imagine you’re a homeowner who’s thinking about hiring a professional pool company ',
            'photo' => 'https://www.goodwoodparkhotel.com/d/goodwoodpark/media/Facilities/__thumbs_1280_445_crop/MayfairPool.jpg?1402761766',            
        ]);
    }
}
