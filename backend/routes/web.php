<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use App\Mail\CancelEmail;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Mail;
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


Route::get('/email', function(){
   
    return new WelcomeMail();
});

Route::get('/cancel', function(){

    return new CancelEmail();
});

Route::get('/reservation', function(){

    return new ReservationMail();
});

Route::get('/{path?}', function () {
    return view('index');
})->where('path', '^((?!api).)*$');