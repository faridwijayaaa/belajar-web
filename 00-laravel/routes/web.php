<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\UserControllers;
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

Route::get('/user', [UserControllers::class, 'viewWelcome']);

Route::get('/tes', function () {
    return view('welcome');
});

Route::get('/admin', [AdminControllers::class, 'index']);
Route::get('/admin/dashboard', [AdminControllers::class, 'index2']);
Route::get('admin/detail/{id_menu}', [AdminControllers::class, 'detail']);
Route::get('admin/create', [AdminControllers::class, 'create']);
Route::put('admin/store', [AdminControllers::class, 'store']);
Route::get('admin/editArtikel/{id}', [AdminControllers::class, 'editArtikel']);
Route::put('admin/update/{id}', [AdminControllers::class, 'updated']);
Route::get('admin/delete/{id}', [AdminControllers::class, 'deleteArtikel']);