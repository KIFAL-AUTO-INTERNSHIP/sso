<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authorization;

class AuthorizationC extends Controller
{
    //
    public function getAuthorization(Request $req)
    {
        return Authorization::get();
    }
    public function addAuthorization(Request $req)
    {
        return Authorization::create([
            'authorization_user' => $req->authorization_user,
            'authorization_app' => $req->authorization_app
        ]);
    }
}
