<?php

use App\Http\Livewire\CrudUsuario;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/contacto', function () {
    return view('livewire.contacto');
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    

    Route::get('/usuarios',CrudUsuario::class)->name('usuarios');
    Route::get('/letrero', function () {
        return view('letrero');
    })->name('letrero');
});
