<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

Route::get('/', function () {
    return redirect()->route('one');
});

Route::get('/one-to-one',   [TokoController::class, 'oneToOne'])->name('one');
Route::get('/one-to-many',  [TokoController::class, 'oneToMany'])->name('many');
Route::get('/many-to-many', [TokoController::class, 'manyToMany'])->name('mm');
Route::get('/artikel',      [TokoController::class, 'artikel'])->name('artikel');