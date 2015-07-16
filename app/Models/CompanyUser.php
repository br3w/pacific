<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_slug', 'company_id', 'user_id', 'user_mail', 'user_status', 'user_type'];

}
