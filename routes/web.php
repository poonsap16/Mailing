<?php

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
    return view('welcome');
});

Route::get('/mail', function () {
    return new App\Mail\Mailhandshake();
    // $mail = new App\Mail\Mailhandshake;

    // return $mail->render();
    
});

Route::get('/greeting', function () {
    return new App\Mail\Greenting('username');
});
