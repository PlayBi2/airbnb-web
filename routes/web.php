<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageUser;
use App\Http\Controllers\UserController;
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

Route::prefix('/')->middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [LoginController::class, 'create']);
    Route::post('/register', [LoginController::class, 'register']);
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