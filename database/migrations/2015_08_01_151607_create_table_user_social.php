<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserSocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_social', function(Blueprint $table){
            $table->increments('id');            
            $table->string('facebook', 100);            
            $table->string('twitter', 100);
            $table->string('linkdin', 100);
            $table->string('instagram', 100);
            $table->string('google_plus', 100);
            $table->string('whats_app', 100);
            $table->string('waze', 100);
            $table->string('viber', 100);
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
        Schema::drop('user_social');
    }
}
