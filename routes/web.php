<?php

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


Route::get('/login', function () {
    return view('layouts.app');
});
Route::get('/register', function () {
    return view('layouts.app');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
    Route::get('/{car}', 'ShowController')->name('main.show');
});

Route::group(['namespace' => 'Admin', 'middleware' => ['role:admin']], function () {
    Route::get('/', 'IndexController')->name('admin.main.index');
});




Auth::routes();


