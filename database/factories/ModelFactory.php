<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function ($faker) {
    return [
        'email' 		 => $faker->email,        
        'password'  	 => bcrypt(123456),
        'company' 		 => $faker->company,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Application::class, function ($faker) {
    return [
        'name' 				=> $faker->company,        
        'slug' 				=> $faker->word,        
        'key' 				=> str_random(10),
        'remember_token' 	=> str_random(10),
    ];
});


$factory->define(App\Models\Company::class, function ($faker) {
    return [
        'name' 				=> $faker->company,        
        'slug' 				=> $faker->word,        
        'master_user' 		=> $faker->email,        
        'master_pass' 		=> bcrypt(123456),        
        'key' 				=> str_random(10),
        'remember_token' 	=> str_random(10),
    ];
});