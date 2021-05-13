<?php

use App\Http\Controllers\corzinaController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\novinkiController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\tovarController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/corzina', [corzinaController::class,'corzina']);
Route::get('/', [indexController::class,'index']);
Route::get('/login', [loginController::class,'login']);
Route::get('/novinki', [novinkiController::class,'novinki']);
Route::get('/register', [registerController::class,'register']);
Route::get('/tovar', [tovarController::class,'tovar']);
Route::post('/register', [registerController::class,'create']);
route::name( 'user.')->group(function() {
    Route::view('/private', 'private')->middleware('auth')->name('private');
    Route::get('/login', function () {
        if (\Illuminate\Support\Facades\Auth::check()) {
            return view('login');
        }
        return view('login');
    })->name('login');

    Route::post('/login', [loginController::class,'login']);

    Route::get('/logout', function (){
        auth::logout();
        return redirect('/');
    })->name('logout');
    Route::get('/register', function () {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('register');
    })->name('register');

    Route::post('/register', [registerController::class,'create']);
});
