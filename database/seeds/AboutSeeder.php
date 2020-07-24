<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'address1' => 'NO.243/1, KALIAMMAHARA,PILIYANDALA.',
            'address2' => 'NO.140, HARBOUR LAND,HAMBANTHOTA.',
            'address3' => '',
            'phone1' => '011 5 244 740',
            'phone2' => '071 8 139 224',
            'phone3' => '077 5 197 628',
            'vision' => 'We are dedicated to building pools and spas that are customized to the client’s individual needs, taste, architectural design, and budget. Utilizing the latest innovations in pool technology, our pools are built to the highest standard of workmanship',
            'email' => 'kasunilakshika96@gmail.com',
            'engineer_name' => 'Bill Gates',
            'engineer_photo' => 'https://resources.stuff.co.nz/content/dam/images/1/q/t/5/o/i/image.related.StuffLandscapeSixteenByNine.710x400.1sl9dk.png/1541868267430.jpg',
            'engineer_review' => 'Even the all-powerful Pointing has no control about the blind texts',
            'archi_name1' => 'Steve Jobs',
            'archi_photo1' => 'http://static1.squarespace.com/static/56eddde762cd9413e151ac92/570cb87b5bd33022b93a0272/5c71150e9b747a1582b54390/1551009704361/Steve+Jobs.jpg?format=1500w',
            'archi_review1' => 'Even the all-powerful Pointing has no control about the blind texts',
            'archi_name2' => 'Paul Walker',
            'archi_photo2' => 'https://ewedit.files.wordpress.com/2016/09/gettyimages-98360214.jpg?w=408',
            'archi_review2' => 'Even the all-powerful Pointing has no control about the blind texts',
            'client_name1' => 'Andrew Field',
            'client_photo1' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTJYiug95kRhtV8IS0HLwv9imAqWDQrzRuKE5ys2ApwDb6iPOY',
            'client_review1'=> 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
            'client_name2' => 'Mark Bubble',
            'client_photo2' => 'https://previews.123rf.com/images/tverdohlib/tverdohlib1609/tverdohlib160900438/62475286-young-guy-with-bearded-handsome-serious-face-blue-eyes-brown-hair-in-dark-hoody-posing-outdoor-on-na.jpg',
            'client_review2'=> 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
            'client_name3' => 'Adam Smith',
            'client_photo3' => 'http://i1361.photobucket.com/albums/r661/voteformost/man/01/031_zac_efron_zpsusgtkunk.jpg',
            'client_review3'=> 'Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
            

            
         ]);
  
        
    }
}
