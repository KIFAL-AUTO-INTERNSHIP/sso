<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginLog;

class LoginLogC extends Controller
{
    //
    public function getLoginLog(Request $request){
        return LoginLog::get();
    }
    public function addLoginLog(Request $req){
        return LoginLog::create([
            'log_user' => $req->log_user,
            'log_date'=> $req->log_date,
            'log_status'=> $req->log_status,
            'log_password'=> $req->log_password,
            'log_ip'=> $req->ip(),
            'log_agent'=> $req->userAgent(),
        ]);
    }
}
