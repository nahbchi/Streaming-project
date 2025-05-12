<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home'); // Define um nome único para a rota

Route::get('/cadFilmes', function () {
    return view('pages.cadFilmes');
})->name('cadfilmes');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/404', function () {
    return view('errors.404');  // Sua página personalizada de 404
});


Route::fallback(function () {
    return redirect('/404');  // Redireciona para a página 404 personalizada
});
