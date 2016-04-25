<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller
{

    public function getIndex()
    {
        $objects = Category::all();
        return view('admin/categories/index')->with('objects',$objects);
    }
    public function getCreate(){
        return view('admin/categories/create');
    }
    public function postCreate(){
        $validate = Validator::make(Input::all(),Category::$rules);
        if($validate->passes()){
            $category = new Category();
            $category->name = Input::get('name');
            $category->save();
            return redirect('categories');
        }
        return view('admin/categories/create')
            ->with('errors',$validate->errors());

    }
    public function getUpdate($id){
        $category = Category::find($id);
        if($category)
        return view('admin/categories/update')
            ->with('category',$category);
    }
    public function postUpdate(){
        $validate = Validator::make(Input::all(),Category::$rules);
        $id = Input::get('id');
        if($validate->passes()){
            $category = Category::find($id);
            $category->name = Input::get('name');
            $category->update();
            return redirect('categories');
        }
        return view('admin/categories/update')
            ->with('errors',$validate->errors());

    }
    public function getDelete($id){
        $category = Category::find($id);
        if($category) {
            $category->delete();
        }
        return redirect('categories');
    }
    public function getCategory($id){


    }
}