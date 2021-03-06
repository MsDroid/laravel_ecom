<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
// use App\Models\User;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});


// Route::get('/', 'login');
Route::get('/login',function (){
    return view('login');
});

Route::get('/', [ProductController::class,'index']);
// Route::get('/login',[UserController::class,'login']);
Route::post('/login', [UserController::class,'login']);
Route::get('detail/{id}', [ProductController::class,'detail']);
Route::get('/search', [ProductController::class,'search']);
Route::post('/cart', [ProductController::class,'add_to_cart']);
Route::get('/cart_detail', [ProductController::class,'cart_list']);
Route::get('removecart/{id}', [ProductController::class,'removeCart']);
Route::get('order', [ProductController::class,'order']);
Route::post('ordernow', [ProductController::class,'orderNow']);

