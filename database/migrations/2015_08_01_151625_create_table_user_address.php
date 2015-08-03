<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_address', function(Blueprint $table){
            $table->increments('id');            
            $table->string('street', 100);            
            $table->string('postal_code', 20);
            $table->string('city', 50);
            $table->string('', 100);
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
        Schema::drop('user_address');
    }
}
