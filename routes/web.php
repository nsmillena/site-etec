<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContatoController;

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

// SOBRE
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

// CURSOS
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');

// NOTÍCIAS
Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias');
Route::get('/noticias/{slug}', [NoticiasController::class, 'show'])->name('noticias.show');

// CONTATO
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');