<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Auth;
class UsersController extends Controller
{
    public function getIndex($page)
    {
        $objects = User::paginate(4);
        return view('admin/users/index')
            ->with('objects', $objects);
    }

    public function getCreate()
    {
        return view('admin/users/create');
    }

    public function postInsert()
    {
        $validate = Validator::make(Input::all(), User::$rules);
        if ($validate->passes()) {
            $user = new User();
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->telephone = Input::get('telephone');
            $user->admin = Input::get('role');
            $user->save();
            return redirect('/users/index/1');
        }
        return view('admin/users/create')
            ->with('errors', $validate->errors());

    }

    public function getUpdate($id)
    {
        $user = User::find($id);
        return view('admin/users/update')->with('user', $user);
    }

    public function postUpdate()
    {
        $validate = Validator::make(Input::all(), User::$rules);
        $id = Input::get('id');
        if ($validate->passes()) {
            $user = User::find($id);
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->telephone = Input::get('telephone');
            $user->admin = Input::get('role');
            $user->update();
            return redirect('/users/index/1');
        }
        return redirect('users/update/' . $id)
            ->with('errors', $validate->errors());
    }

    public function getDelete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect('users');

    }
    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}
