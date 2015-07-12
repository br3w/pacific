<?php

use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{

	public function run(){
        factory('App\Models\Company', 5)->create();
        factory('App\Models\User', 5)->create();
        factory('App\Models\Application', 5)->create();
	}

}
