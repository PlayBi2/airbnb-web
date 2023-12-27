<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageUser;
use App\Http\Controllers\Renter;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('pages.home');
});

Route::prefix('/')->middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [LoginController::class, 'create']);
    Route::post('/register', [LoginController::class, 'register']);
});



Route::get('/product',function () {
  return view('pages.product');
});

// Renter the product
Route::post('/for-renter', [Renter::class, 'show_renter']);
Route::resource('pages', Renter::class);
Route::get('/for-renter',[Renter::class, 'show_renter']);
// Route::get('/for-renter',function () {
//   return view('pages.renter');
// });

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

Route::prefix('/admin')->middleware('phanquyen')->group(function () {
    Route::get('/manage-user', [ManageUser::class, 'show']);
    Route::post('/update-status', [ManageUser::class, 'update']);
    Route::get('/add-user',[ManageUser::class, 'addUserPage']);
    Route::post('/add-user',[ManageUser::class, 'addUser']);
});

Route::prefix('user')->middleware('auth')->group(function (){
    Route::get('/detail-account',[UserController::class, 'accountUser']);
    Route::get('/detail-user',[UserController::class, 'detailUser']);
    Route::get('/change-password',[UserController::class, 'changePasswordPage']);
    Route::post('change-password',[UserController::class, 'updatePassword']);
});
Route::post('/logout', [LoginController::class, 'destroy']);
