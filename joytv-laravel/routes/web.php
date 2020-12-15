<?php

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

Auth::routes(['verify' => true]);

// Dashboard Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::namespace('App\Http\Controllers\Back')->middleware(['auth'])->prefix('user')->name('user.')->group(function(){
    Route::resource('events','EventsController')->except(['create','show']);
    Route::resource('projects','ProjectsController')->except(['create','show']);
    Route::resource('news','NewsController')->except(['create','show']);
    }
);


// Frontend Routes
Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])->name('joytv.home');
Route::namespace('App\Http\Controllers\Front')->prefix('front')->name('front.')->group(function(){
    Route::get('about','FrontController@about')->name('about');
    Route::get('services','FrontController@services')->name('services');
    Route::resource('contact','ContactsController')->except(['create','destroy','edit','update']);
    Route::resource('news','NewsController')->except(['create','destroy','edit','update']);
    Route::resource('projects','ProjectsController')->except(['create','destroy','edit','update']);
    Route::resource('events','EventsController')->except(['create','destroy','edit','update']);
    }
);