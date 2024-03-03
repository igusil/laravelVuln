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

