<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $User = strip_tags(request('Name','userID'));
    return 'Home' . $Name . $userID;//view('welcome');
});
Route::get('/SignUp',Function(){
    return 'SignUp';
});
Route::get('/Signin',Function(){
    return 'SignIn';
});
