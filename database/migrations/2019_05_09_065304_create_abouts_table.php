<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address1');
            $table->string('address2');
            $table->string('address3');
            $table->string('phone1',13);
            $table->string('phone2',13);
            $table->string('phone3',13);
            $table->string('vision', 500);
            $table->string('email');
            $table->string('engineer_name');
            $table->string('engineer_photo',500);
            $table->string('engineer_review',500);
            $table->string('archi_name1');
            $table->string('archi_photo1',500);
            $table->string('archi_review1',500);
            $table->string('archi_name2');
            $table->string('archi_photo2',500);
            $table->string('archi_review2',500);
            $table->string('client_name1');
            $table->string('client_photo1',500);
            $table->string('client_review1',500);
            $table->string('client_name2');
            $table->string('client_photo2',500);
            $table->string('client_review2',500);
            $table->string('client_name3');
            $table->string('client_photo3',500);
            $table->string('client_review3',500);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
