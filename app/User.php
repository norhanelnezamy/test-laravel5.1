<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    protected $fillable = array('first_name','last_name','email','telephone');

    public static $rules = array(
        'first_name'=>'required|min:3|alpha',
        'last_name'=>'required|min:3|alpha',
        'email'=>'required|email',
        'telephone'=>'required|numeric',
        'password'=>'required|alpha_num|between:8,12|confirmed',
        'password_confirmation'=>'required|alpha_num|between:8,12',
        'admin'=>'integer'
    );
}
