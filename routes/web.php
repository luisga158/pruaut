<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\PerfilController;

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
    return view('bienvenido');
});
Route::resource('posts', PostController::class);
Auth::routes(['verify' => true]);

Route::group(['middleware' => 'verified'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/post/index', [App\Http\Controllers\PostController::class, 'index'])->name('post/index');
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post/create');
    Route::get('/post/show', [App\Http\Controllers\PostController::class, 'show'])->name('post/show');
    Route::get('/post/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post/edit');
    Route::get('/post/my', [App\Http\Controllers\PostController::class, 'my'])->name('post/my');
    Route::resource('temas', TemaController::class);
    Route::get('/tema/index', [App\Http\Controllers\TemaController::class, 'index'])->name('tema/index');
    Route::get('/tema/indextema', [App\Http\Controllers\TemaController::class, 'indextema'])->name('tema/indextema');
    Route::get('/tema/create', [App\Http\Controllers\TemaController::class, 'create'])->name('tema/create');
    Route::resource('perfils', PerfilController::class);
    Route::get('/perfil/edit', [App\Http\Controllers\PerfilController::class, 'edit'])->name('perfil/edit');
    Route::get('/perfil/editroll', [App\Http\Controllers\PerfilController::class, 'editroll'])->name('perfil/editroll');
    Route::get('/perfil/index', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil/index');
    Route::get('/perfil/show', [App\Http\Controllers\PerfilController::class, 'show'])->name('perfil/show');
    Route::get('/perfil/my', [App\Http\Controllers\PerfilController::class, 'my'])->name('perfils.my');
});