<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta específica que permites
Route::get('/myWife', function () {
    return view('myWife');
})->name('myWife');

// Ruta que cubre todo lo demás y redirige a la raíz
Route::fallback(function () {
    return redirect('/');
});
