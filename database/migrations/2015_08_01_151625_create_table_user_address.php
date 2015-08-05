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
            $table->enum('type',['home','work','holiday','temporary']);          
            $table->string('street', 100);
            $table->string('complement', 100);
            $table->string('postal_code', 20);
            $table->string('city', 50);
            $table->string('district', 50);
            $table->string('country', 50);
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
