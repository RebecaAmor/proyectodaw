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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTAS USUARIOS - Crear, almacenar, listar, mostrar, modificar, actualizar y eliminar.
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');

Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

//RUTAS ADMIN - Crear, almacenar, listar, mostrar, modificar, actualizar y eliminar.
Route::get('/admin/tcreate', [App\Http\Controllers\UserController::class, 'tcreate'])->name('admin.tcreate');

Route::post('/admin', [App\Http\Controllers\UserController::class, 'tstore'])->name('admin.tstore');

Route::get('trainners', [App\Http\Controllers\UserController::class, 'tindex'])->name('admin.tindex');

Route::get('/admin/{trainner}', [App\Http\Controllers\UserController::class, 'tshow'])->name('admin.tshow');

Route::get('/admin/{trainner}/tedit', [App\Http\Controllers\UserController::class, 'tedit'])->name('admin.tedit');

Route::put('/admin/{trainner}', [App\Http\Controllers\UserController::class, 'tupdate'])->name('admin.tupdate');

Route::delete('/admin/{trainner}', [App\Http\Controllers\UserController::class, 'tdestroy'])->name('admin.tdelete');
