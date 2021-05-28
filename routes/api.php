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
Route::get('auth', 'AuthorizationC@getAuthorization');
Route::post('auth', 'AuthorizationC@addAuthorization');
Route::get('conf', 'ConfirmationC@getConfirmation');
Route::post('conf', 'ConfirmationC@addConfirmation');
Route::get('log', 'LoginLogC@getLoginLog');
Route::post('log', 'LoginLogC@addLoginLog');
Route::get('user', 'UserC@getUser');
Route::post('user', 'UserC@addUser');
Route::post('valid', 'UserC@validToRegister');
Route::get('sms', 'SmsC@sendMsg');



// Route::get('user/{name}', function ($name = null) {
//     return 'Hi ' . $name;
// });
// Route::get('req', 'UserC@showIpAgent');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });