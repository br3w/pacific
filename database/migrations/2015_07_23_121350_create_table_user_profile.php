<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function(Blueprint $table){
            $table->increments('id');            
            $table->string('first_name', 50);
            $table->string('last_name', 100);            
            $table->date('birth_date');
            $table->string('birth_place',50);
            $table->string('live_place', 50);            
            $table->string('company', 50);
            $table->string('office', 50);
            $table->date('admission_date');
            $table->string('education', 50);
            $table->string('institution', 50);
            $table->date('conclusion');
            $table->string('favorite_hobby', 50);
            $table->string('favorite_issue', 50);
            $table->string('favorite_color', 50);
            $table->string('favorite_place', 50);
            $table->string('favorite_book', 50);
            $table->string('favorite_music', 50);
            $table->string('favorite_movie', 50);
            $table->string('favorite_theater', 50);
            $table->string('favorite_sport', 50);
            $table->string('favorite_thinker', 50);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('user_profile');
    }
}
