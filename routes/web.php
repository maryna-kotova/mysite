<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'user'])->middleware('auth');
Route::put('/profile', [ProfileController::class, 'user_update'])->middleware('auth');


Auth::routes();



Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('/user', UserController::class);

});


// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });