<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 60);
            $table->string('slug')->unique();
            $table->string('key')->unique();
            $table->boolean('active')->default(1);
            $table->integer('type')->default(1);
            $table->integer('status')->default(1);
            $table->string('master_user', 60);
            $table->string('master_pass', 60);           
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
        Schema::drop('company');
    }
}
