<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Motor',
            'description' => 'Hayward 1.5 Horsepower 2 Speed Heavy Duty Motor Super Circulation Pump W/ Switch.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSNQPbI73DiThqhsWt5LRRAnVYhP9704GQRLowvcCeD0QS3IDYjA',
            'price' => 698.88
         ]);
  
         DB::table('products')->insert([
             'name' => 'chemical',
             'description' => 'Swimming pool chemicals in the greater Rockford, IL region.',
             'photo' => 'http://www.globalchemicalssrilanka.com/images/home/chemicals.jpg',
             'price' => 983.00
         ]);
  
         DB::table('products')->insert([
             'name' => 'chemical',
             'description' => 'Trichloroisocyanuric Acid',
             'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYRXcS0a5YztWWazW0lc-_2o0PojRVvEbieoxyhd5mJLTzJJSkgQ',
             'price' => 675.00
         ]);
  
         DB::table('products')->insert([
             'name' => 'motor',
             'description' => 'Century AO Smith B2748 Single Speed Square Flange Swimming Pool Pump Motor 2 HP.',
             'photo' => 'https://i.ebayimg.com/00/s/Mzc1WDUwMA==/z/ctcAAOxyVaBSuLgS/$_35.JPG?set_id=2',
             'price' => 159.99
         ]);
  
         DB::table('products')->insert([
             'name' => 'chemical',
             'description' => 'SunGuard Pool Chlorine Stabilizer.',
             'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYbR0HV0vM0bfdmgY889woqrnStX10xYarL1lob7dFrlV6yNubWg',
             'price' => 68.00
         ]);
  
         DB::table('products')->insert([
             'name' => 'motor',
             'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
             'photo' => 'https://www.swimpoolwarehouse.com/uimages/DSC00672.jpg',
             'price' => 129.99
         ]);

         DB::table('products')->insert([
            'name' => 'Swimming Pool Cartridge Filter',
            'description' => 'Solvent Connections:11.4cumtr/hr,Filter Medium Material:Microfiber, Cotton, Fiberglass, Paper, Activated Carbon,Flowrate:11.4 m3/hr',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXVEyyo4W-7RlvfTfJCgt00Qy8n-wac4IpfF-aGjzkIvRb5gW4',
            'price' => 159.99
        ]);
 
        DB::table('products')->insert([
            'name' => 'Top Mount Sand Filter',
            'description' => 'Barrel Unions:500 mm,Min Capacity:10980 LPH,Max Capacity:24000 LPH,Color:Black,Shape:Cyllendrical.',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl8Bsnr2ZJ7rhp3jy8fhHBkMLC4jarbrG8Y-7zOAaqDRiJGZPj',
            'price' => 68.00
        ]);
 
        DB::table('products')->insert([
            'name' => 'Saci Commercial Swimming Pool Filter',
            'description' => 'The Saci Commercial Swimming Pool Filter is a high performance bobbin wound polyester filter designed for commercial and public swimming pools..',
            'photo' => 'https://5.imimg.com/data5/CY/JU/MY-1807731/swimming-pool-cartridge-filter-500x500.png',
            'price' => 129.99
        ]);
    }
}
