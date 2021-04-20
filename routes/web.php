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
Route::resource('ongs', ControladorOng::class);

Route::resource('socis', ControladorSoci::class);

Route::resource('treballadors', ControladorTreballador::class);

Route::resource('usuaris', ControladorUsuari::class);

Route::get('/users', function() {
    return view('users');
});

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/registrar', function() {
    return view('registrar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
