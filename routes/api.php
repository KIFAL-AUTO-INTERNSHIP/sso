<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\App;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/* Route::get('test',function(Request $request){
    return App::create([
        "app_id" => 100,
        "app_name" => 'test1',
        "app_key" => 'test1'
    ]);
}); */

Route::get('app', 'AppC@getApp');
Route::post('app', 'AppC@addApp');
Route::get('user', 'UserC@getUser');
Route::post('user', 'UserC@addUser');
Route::post('validuser', 'UserC@testUser');
Route::get('finduser/{phone}', 'UserC@findUserByPhone');
Route::get('finduser/{phone}', 'UserC@findUserByEmail');
Route::get('loginlog', 'LoginLogC@getLoginLog');
Route::post('loginlog', 'LoginLogC@addLoginLog');
Route::get('confirmation', 'ConfirmationC@getConfirmation');
Route::post('confirmation', 'ConfirmationC@addConfirmation');
Route::get('authorization', 'AuthorizationC@getAuthorization');
Route::post('authorization', 'AuthorizationC@addAuthorization');
Route::get('sendMail', 'MailC@SendEmail');
Route::get('sendMsg', 'SmsC@sendMsg');
