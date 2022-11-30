<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('outside.home');
});

Route::get('/ingresar', function () {
    return view('outside.login');
})->name('ingresar');

Route::get('/registrar/{codigo}', [RegisterController::class, 'indexRegister'])->middleware('guest');

Route::post('/registrar', [RegisterController::class, 'registrar'])->middleware('guest')->name('registrar');;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/videos_update', [App\Http\Controllers\HomeController::class, 'videosUpdate'])->name('videos_update');

Route::get('/usuarios/{estado}', [App\Http\Controllers\HomeController::class, 'usersActivesOrInactives'])->name('usuarios');

Route::get('/testimonios', [App\Http\Controllers\HomeController::class, 'getTestimonios'])->middleware('auth');

Route::post('/testimonios_save', [App\Http\Controllers\HomeController::class, 'addTestimonios'])->middleware('auth')->name('testimonios_save');
