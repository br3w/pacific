<?php

namespace App\Http\Middleware;

use Closure;
use  App\models;
use Illuminate\Http\Request;

class AuthCompany
{
    
    protected $slug;

    public function __construct(Request $request){
        $this->slug = \Auth::user()->company;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        dd($request->all());

        if($this->slug){
            $cia = \App\Models\Company::where('slug', $this->slug)->first();
            if($cia){

            }
        }
    }
}
