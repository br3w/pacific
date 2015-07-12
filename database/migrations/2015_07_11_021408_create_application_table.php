<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 60);
            $table->string('slug')->unique();
            $table->string('key')->unique();
            $table->boolean('active')->default(1);
            $table->integer('type')->default(1);
            $table->integer('status')->default(1);          
            $table->rememberToken();
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
        Schema::drop('applications');
    }
}
