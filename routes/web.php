<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ButterflyController;
use App\Http\Controllers\AuthController;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('sample', function () {
    return view('butterfly');
});


Route::get('/', function () {
    return view('butterfly');
});
Route::get('edit', function () {
    return view('edit');
});
Route::get('sample', function () {
    return view('sample');
});
Route::get('sample2', function () {
    return view('sample2');
});

Route::get('sample2/{id}', [ButterflyController::class,'edit']);
Route::get('sample/{id}', [ButterflyController::class,'delete']);

Route::get('display', function () {
    return view('display');
});

Route::get('admin', function () {
    return view('auth.login');
});


Route::get('display', function (Product $first) {
    return $first;
});



Route::get('display',[ButterflyController::class,'first']);

Route::resource('butterfly', \App\Http\Controllers\ButterflyController::class);

Route::post('customer-save',[ButterflyController::class,'save']);

Route::post('customer-update',[ButterflyController::class,'update']);

//authentication

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
 
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
Route::middleware('auth')->group(function () {
    Route::get('display', function () {
        return view('display');
    })->name('display');
 
    
 
    
});

