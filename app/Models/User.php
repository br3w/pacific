<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

        /**
        * The database table used by the model.
        *
        * @var string
        */
        protected $table = 'users';

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */
        protected $fillable = ['email', 'password', 'active', 'status', 'type', 'company'];

        /**
        * The attributes excluded from the model's JSON form.
        *
        * @var array
        */
        protected $hidden = ['password', 'remember_token'];

        /**
        * Get the profile record associated with the user.
        */
        public function profile()
        {
            return $this->hasOne('App\models\UserProfile');
        }

        /**
        * Get the social record associated with the user.
        */
        public function social()
        {
            return $this->hasOne('App\models\UserSocial');
        }

        /**
        * Get the address record associated with the user.
        */
        public function address()
        {
            return $this->hasMany('App\models\UserAddress');
        }

        /**
        * Get the phone record associated with the user.
        */
        public function phone()
        {
            return $this->hasMany('App\models\UserPhone');
        }

}
