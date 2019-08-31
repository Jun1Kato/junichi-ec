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
    return redirect('home');
});

Route::get('/home', 'ECcontroller@showHome');

Route::get('/signup', 'ECcontroller@showSignUp');

Route::get('/signin', 'ECcontroller@showSignIn');

Route::get('/product', 'ECcontroller@showProduct');

Route::get('/purchase', 'ECcontroller@showPurchase');

Route::post('/purchase', 'ECcontroller@exePurchase');

Route::get('/complete', 'ECcontroller@showComplete');
