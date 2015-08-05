<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
	/**
	* The database table used by the model.
	*
	* @var string
	*/
    protected $table = 'user_social';


	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'facebook' ,		     
        'twitter' ,		
        'linkdin' ,		
        'instagram', 	
        'google_plus', 	
        'whats_app', 	
        'waze' 	,		
        'viber' ,		
    ];
}
