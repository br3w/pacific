<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCompanyUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_user', fuction(Blueprint $table){
            $table->increments('id');
            $table->string('company_slug');
            $table->integer('company_key');
            $table->integer('user_id');
            $table->string('user_mail');
            $table->string('user_status');
            $table->string('user_type');
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
        Schema::Drop('company_user');
    }
}
