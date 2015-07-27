<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
	/**
	* The database table used by the model.
	*
	* @var string
	*/
    protected $table = 'user_profile';


	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
		'first_name',
		'last_name',
		'birth_date',
		'birth_place',
		'live_place',
		'company',
		'office',
		'admission_date',
		'education',
		'institution',
		'conclusion',
		'favorite_hobby',
		'favorite_issue',
		'favorite_color',
		'favorite_place',
		'favorite_book',
		'favorite_music',
		'favorite_movie',
		'favorite_theater',
		'favorite_sport',
		'favorite_thinker'
    ];
}
