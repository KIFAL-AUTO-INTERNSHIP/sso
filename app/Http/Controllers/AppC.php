<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class AppC extends Controller
{
    //
    public function getApp(Request $request){
        return App::get();
    }
    public function addApp(Request $req){
        return App::create([
            'app_name' => $req->app_name,
            'app_key'=> $req->app_key
        ]);
    }
}

