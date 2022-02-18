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

Route::group(['middleware' => ['role:admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController')->name('admin.main.index');
    Route::get('/create', 'CreateController')->name('admin.main.create');
    Route::post('/', 'StoreController')->name('admin.main.store');
    Route::get('/{car}', 'ShowController')->name('admin.main.show');
    Route::get('/{car}/edit', 'EditController')->name('admin.main.edit');
    Route::patch('/{car}', 'UpdateController')->name('admin.main.update');
    Route::delete('/{car}', 'DeleteController')->name('admin.main.delete');
});

Route::group(['middleware' => ['role:user|admin'], 'namespace' => 'User', 'prefix' => 'user'], function () {
    Route::get('/', 'IndexController')->name('user.index');
    Route::get('/{car}/edit', 'EditController')->name('user.edit');
    Route::patch('/{car}', 'UpdateController')->name('user.update');
});




Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
    Route::get('/{car}', 'ShowController')->name('main.show');
});






Auth::routes(['verify' => true]);


