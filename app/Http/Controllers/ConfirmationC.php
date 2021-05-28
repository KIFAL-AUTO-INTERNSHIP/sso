<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmation;

class ConfirmationC extends Controller
{
    //
    public function getConfirmation(Request $req)
    {
        return Confirmation::get();
    }
    public function addConfirmation(Request $req)
    {
        return Confirmation::create([
            'confirmation_user' => $req->confirmation_user,
            'confirmation_success' => $req->confirmation_success,
            'confirmation_sms' => $req->confirmation_sms,
            'confirmation_date' => $req->confirmation_date,
            'confirmation_success_date' => $req->confirmation_success_date,
            'confirmation_nbr_tentative' => $req->confirmation_nbr_tentative
        ]);
    }
}
