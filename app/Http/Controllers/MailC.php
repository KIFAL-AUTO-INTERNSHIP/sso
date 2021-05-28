<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailC extends Controller
{
    //
    public function sendEmail(){
        $details = [
            'title' => 'Réinitialiser votre mot de passe',
            'body' => 'hello',
        ];

       return Mail::to("khaoulazouggar@gmail.com")->send(new TestMail($details));
        
        // return "Email sent";
    }
}
