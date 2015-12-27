<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\File;
use Faker\Test\Provider\ImageTest;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Validator;
use Auth;

abstract class Controller extends BaseController
{
    public function __construct(){
        if(Auth::guest()){
            redirect('/');
        }
    }
    use DispatchesJobs, ValidatesRequests;

    public static function upload($file)
    {
            $upload_path = date('Y') . '/' . date('m');
            if (!file_exists(date('Y'))) File::makeDirectory(date('Y'));
            if (!file_exists($upload_path)) File::makeDirectory($upload_path);
            $fileName = date('Y-m-d-H:i:s') . "-" . $file->getClientOriginalName();
            $path = public_path($upload_path);
            $file->move($path, $fileName);
            return $upload_path . '/' . $fileName;
    }
}
