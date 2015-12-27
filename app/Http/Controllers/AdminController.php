<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class AdminController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin()
    {
        if ($this->auth->attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
            return redirect()->intended('users/index/1');
        }
        return redirect('/');
    }
}