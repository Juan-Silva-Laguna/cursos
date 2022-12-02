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
    $testimonios = App\Models\Testimonio::leftJoin('users', 'users.id', '=', 'testimonios.usuario_id')->select('users.name', 'testimonios.descripcion', 'testimonios.satisfacion')->orderByDesc('testimonios.id')->limit(3)->get();
    return view('outside.home', ['testimonios'=>$testimonios]);
});


Route::get('/ingresar', function () {
    return view('outside.login');
})->name('ingresar');

Route::get('/registrar/{codigo}', [RegisterController::class, 'indexRegister'])->middleware('guest');

Route::post('/registrar', [RegisterController::class, 'registrar'])->middleware('guest')->name('registrar');;


Auth::routes();

Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'showPerfil'])->name('perfil');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/videos_update', [App\Http\Controllers\HomeController::class, 'videosUpdate'])->name('videos_update');

Route::get('/usuarios/{estado}', [App\Http\Controllers\HomeController::class, 'usersActivesOrInactives'])->name('usuarios');

Route::get('/usuariosAll', [App\Http\Controllers\HomeController::class, 'todosUsuarios'])->name('usuarios');

Route::get('/testimonios', [App\Http\Controllers\HomeController::class, 'getTestimonios'])->middleware('auth');

Route::get('/activar/{id}', [App\Http\Controllers\HomeController::class, 'activarUsuario'])->middleware('auth');

Route::get('/inactivar/{id}', [App\Http\Controllers\HomeController::class, 'inactivarUsuario'])->middleware('auth');

Route::post('/actualizar_datos', [App\Http\Controllers\HomeController::class, 'cambiarDatos'])->middleware('auth')->name('actualizar_datos');

Route::post('/cambiar_clave', [App\Http\Controllers\HomeController::class, 'cambiarClave'])->middleware('auth')->name('cambiar_clave');

Route::post('/testimonios_save', [App\Http\Controllers\HomeController::class, 'addTestimonios'])->middleware('auth')->name('testimonios_save');
