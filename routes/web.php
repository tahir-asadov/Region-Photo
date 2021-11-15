<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::group(['middleware' => ['role:super-admin']], function () {
    Route::get('/dashboard', function(){
        return 'Only for super admin';
    });

    Route::resource('village', VillageController::class);
    Route::resource('city', CityController::class);
    Route::resource('region', RegionController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('post', PostController::class);
    Route::resource('user', UserController::class);
});

Route::group(['middleware' => ['role:regular-user|super-admin']], function () {
    Route::get('/panel', function(){
        return 'Only for super admin and regular user';
    });
});



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
