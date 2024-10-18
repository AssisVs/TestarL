<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;
use VeiculoController as GlobalVeiculoController;

Route::get('/', [UserController::class, 'index'])->name('user.index');

// Route::get('/', function () {
//     return view('/auth/login');
// });

Route::get('/veiculos', [VeiculoController::class, 'listar'])->name('veiculos.listar');
Route::get('/user', [UserController::class, 'listar1'])->name('user.listar1');

Route::any('/pages/exemplo', function () {
    return view('/pages/exemplo');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
