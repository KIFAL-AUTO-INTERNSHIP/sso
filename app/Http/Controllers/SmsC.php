<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsC extends Controller
{
    //
    public function sendMsg(){
        Nexmo::message()->send([
            'to' => '212628807581',
            'from' => '21269999581',
            'text' =>  'you won 1000000000000 dh congrats'
        ]);

        echo "message sent";
    }
}
