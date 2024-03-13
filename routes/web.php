<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/swh', function () {
    return view('swh');
});
Route::get('/info', function () {
    phpinfo();
});
Route::get('/admin', function () {
    return $test;
});
Route::get('/admin/rota-protegida', function () {
    return "Uma informação confidencial";
});
Route::resource('posts', PostController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/edit', [App\Http\Controllers\UserController::class, 'show_edit']);
Route::get('/profile/update', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update');