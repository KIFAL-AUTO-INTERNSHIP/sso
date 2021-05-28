<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsC extends Controller
{
    public function sendMsg()
    {
        Nexmo::message()->send([
            'to' => '212603963639',
            'from' => '2120708026660',
            'text' => 'Test SMS'
        ]);

        echo "Message sent!";
        // return "running";
    }
}
