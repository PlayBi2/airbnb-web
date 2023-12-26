<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageUser;
use App\Http\Controllers\Product;
use App\Http\Controllers\Renter;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', [LoginController::class, 'show'])->middleware('guest');
Route::post('/login',[LoginController::class, 'login'])->middleware('guest');

Route::get('/register', [LoginController::class, 'create'])->middleware('guest');
Route::post('/register', [LoginController::class, 'register'])->middleware('guest');

Route::post('/logout',[LoginController::class, 'destroy']);


Route::prefix('/admin')->middleware('phanquyen')->group(function (){

    Route::get('/manage-user', [ManageUser::class, 'show']);
    Route::post('/update-status',[ManageUser::class, 'update']);
});


Route::get('/product',function () {
  return view('pages.product');
});

// Renter the product
Route::post('/for-renter', [Renter::class, 'show_renter']);
Route::resource('pages', Renter::class);
Route::get('/for-renter',[Renter::class, 'show_renter']);

// Route::post('/for-renter', [Product::class, 'show_renter']);
// Content_renter
Route::prefix('/for-renter')->group(function (){
    Route::get('/new-product', [Renter::class, 'new-product']);
    Route::post('/new-product', [Renter::class, 'create']);
Route::get('/new-product',function () {
  return view('pages.content-renter');
});

    // Route::post('/update-status',[Product::class, 'new-product']);
});
