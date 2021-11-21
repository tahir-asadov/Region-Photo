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

// Auth routes
Auth::routes(['verify' => true]);


// Super admin routes
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
    Route::get('/u/dashboard', function(){
        return 'Only for super admin and regular user';
    });
    Route::get('/u/dashboard/upload', function(){
        return 'Only for super admin and regular user';
    });
    Route::get('/u/me', function(){
        return 'Only for super admin and regular user';
    });
    Route::post('/u/logout', [HomeController::class, 'logout'])->name('public.logout');
});


// Public routes
Route::get('/', [HomeController::class, 'index'])->name('public.home');

Route::get('/u/login', [HomeController::class, 'login'])->name('public.login');
Route::post('/u/loginuser', [HomeController::class, 'loginuser'])->name('public.loginuser');
Route::get('/u/register', [HomeController::class, 'register'])->name('public.register');

Route::get('/post/{any}/{post}', [HomeController::class, 'post'])->name('public.post');
Route::get('/region/{any}/{region}', [HomeController::class, 'region'])->name('public.region');
Route::get('/city/{any}/{city}', [HomeController::class, 'city'])->name('public.city');
Route::get('/village/{any}/{village}', [HomeController::class, 'village'])->name('public.village');
Route::get('/user/{any}/{user}', [HomeController::class, 'user'])->name('public.user');
