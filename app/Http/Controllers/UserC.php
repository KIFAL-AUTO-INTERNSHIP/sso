<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Validation\Rules\Password;

class UserC extends Controller
{
    //
    public function getUser(Request $req){
        return User::get();
    }
    public function addUser(Request $req){

        $user= new User;
        $user->user_firstname=$req->user_firstname;
        $user->user_lastname=$req->user_lastname;
        $user->user_password=$req->user_password;
        $user->user_email=$req->user_email;
        $user->user_phone=$req->user_phone;
        $user->user_token=$req->user_token;
        $result=$user->save();
        if($result){

            return ["Result" => "data has been saved"];
        }else{
            return ["Result" => "operation failed"];

        }

            // return User::create([
            //     'user_firstname' => $req->user_firstname,
            //     'user_lastname' => $req->user_lastname,
            //     'user_password' => Hash::make($req->user_password),
            //     'user_email' => $req->user_email,
            //     'user_phone' => $req->user_phone,
            //     'user_token' => $req->user_token,
            // ]);     
    }
    function testUser(Request $req){
            $rules=array(
                'user_firstname' => 'required|string|min:3|max:18',
                'user_lastname' => 'required|string|min:3|max:18',
                'user_email' => 'required|email',
                'user_phone' => 'required|min:10|numeric',
                // 'user_token' => 'required',
                'user_password' => [
                    'required',
                    Password::min(8)
                        ->mixedCase()
                        ->letters()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(),
                ],

            );
            $validator = Validator::make($req->all(),$rules);
            if($validator->fails()){
                return response()->json($validator->errors(),401);
            }else if($this->findUserByPhone($req->user_phone) === "already exist" ||
            $this->findUserByEmail($req->user_email) === "already exist"
            )
                return "exist"; 
            else
                return $this->addUser($req);

           
        }

        function findUserByPhone($phone){
            $result = User::where('user_phone', $phone)->get();
            if(count($result)){
                // return $result;
                return "already exist";
            }else{
                return "not found";
    
            }
        }

        function findUserByEmail($email){
            $result = User::where('user_email', $email)->get();
            if(count($result)){
                // return $result;
                return "already exist";
            }else{
                return "not found";
    
            }
        }
}
