<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{

	public function run(){
		factory('App\Models\Company', 3)->create();
		factory('App\Models\User', 3)->create();
		factory('App\Models\Application', 3)->create();
	}

}
