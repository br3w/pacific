<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserPhone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_phone', function(Blueprint $table){
            $table->increments('id');  
            $table->enum('type',['home','work','mobile','temporary']);          
            $table->string('country_code', 5);
            $table->string('city_code', 5);
            $table->string('phone_number', 20);
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
        Schema::drop('user_phone');
    }
}
