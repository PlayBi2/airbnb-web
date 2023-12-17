<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageUser;
use Illuminate\Support\Facades\Route;

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
