<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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
    return view('index');
});
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('publisher')->namespace('Publisher')->group(function(){
    // Route::get('/login', 'LoginController@login')->name('publisher.login');
    Route::get('/register/username', 'RegisterController@registerByUsernameForm')->name('publisher.register.username');
    Route::post('/register/username/store', 'RegisterController@registerWithUsername')->name('publisher.register.username.store');

    Route::get('/login/username', 'LoginController@loginByUsernameForm')->name('publisher.login.username');
    Route::post('/login/username/store', 'LoginController@loginWithUsername')->name('publisher.login.username.store');

    Route::get('/register/phone', 'RegisterController@registerByphoneForm')->name('publisher.register.phone');
    Route::post('/register/phone/store', 'RegisterController@registerWithphone')->name('publisher.register.phone.store');

    Route::get('/login/phone', 'LoginController@loginByphoneForm')->name('publisher.login.phone');
    Route::post('/login/phone/store', 'LoginController@loginWithphone')->name('publisher.login.phone.store');

    Route::get('/dashboard', 'DashboardController@index')->name('publisher.dashboard');
    Route::resource('/listing', 'ListingController');
});

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('facebook')->redirect();
// })->name('facebook.login');

// Route::get('/auth/callback', 'Publisher\LoginController@loginByFacebook');


Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/listing', 'DashboardController@viewAllListing')->name('admin.listing');
    Route::get('/roommate', 'DashboardController@viewAllRoommate')->name('admin.roommate');
});
