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
Route::group(['middleware'=>'auth'], function(){ //"Group" agrupa varias rutas que se muestran solo para determinados usuarios
    Route::get('/trainners/tcreate', [App\Http\Controllers\UserController::class, 'tcreate'])->name('admin.tcreate');
    Route::post('/trainners', [App\Http\Controllers\UserController::class, 'tstore'])->name('admin.tstore');
    Route::get('trainners', [App\Http\Controllers\UserController::class, 'tindex'])->name('admin.tindex');
    Route::get('/trainners/{trainner}', [App\Http\Controllers\UserController::class, 'tshow'])->name('admin.tshow');
    Route::get('/trainners/{trainner}/tedit', [App\Http\Controllers\UserController::class, 'tedit'])->name('admin.tedit');
    Route::put('/trainners/{trainner}', [App\Http\Controllers\UserController::class, 'tupdate'])->name('admin.tupdate');
    Route::delete('/trainners/{trainner}', [App\Http\Controllers\UserController::class, 'tdestroy'])->name('admin.tdelete');
    
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
});

//RUTAS ACTIVIDADES
Route::get('/evento/form',[App\Http\Controllers\ControllerEvent::class, 'form'])->name('evento.form');

Route::post('/evento/create',[App\Http\Controllers\ControllerEvent::class, 'create'])->name('evento.create');

Route::get('/evento/details/{id}',[App\Http\Controllers\ControllerEvent::class, 'details'])->name('evento.details');

Route::get('/evento/index',[App\Http\Controllers\ControllerEvent::class, 'index'])->name('evento.index');

Route::get('/evento/index/{month}',[App\Http\Controllers\ControllerEvent::class, 'index_month'])->name('evento.index_month');

Route::post('/evento/calendario',[App\Http\Controllers\ControllerEvent::class, 'calendario'])->name('evento.calendario');

//RUTAS COMPRA SUSCRIPCIONES
Route::get('subscription', [App\Http\Controllers\SubsController::class, 'index'])->name('subs.index');
Route::post('subscription/add', [App\Http\Controllers\SubsController::class, 'add'])->name('subs.add');
Route::get('subscription/checkout', [App\Http\Controllers\SubsController::class, 'checkout'])->name('subs.checkout');
Route::post('subscription/checkout', [App\Http\Controllers\SubsController::class, 'pay'])->name('subs.pay');
Route::post('subscription/remove', [App\Http\Controllers\SubsController::class, 'remove'])->name('subs.remove');