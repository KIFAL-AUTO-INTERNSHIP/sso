<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class UserC extends Controller
{
    //
    public function getUser(Request $req)
    {
        return User::get();
    }
    public function addUser(Request $req)
    {
        $user = new User();

        $user->user_firstname = $req->input('user_firstname');
        $user->user_lastname = $req->input('user_lastname');
        $user->user_email = $req->input('user_email');
        $user->user_phone = $req->input('user_phone');
        $user->user_token = $req->input('user_token');   //to generate
        $user->user_password = Hash::make($req->input('user_password'));

        $user->save();
        return response()->json($user);
    }

    public function validToRegister(Request $req)
    {
        $rules = array(
            "user_firstname" => "required|string|min:3|max:18",
            "user_lastname" => "required|string|min:3|max:18",
            "user_email" => "required|email",
            "user_phone" => "required|numeric|min:10",
            // "user_token" => "required",
            "user_password" => [
                'required',
                // 'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()

            ],
        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        }
    }
}
