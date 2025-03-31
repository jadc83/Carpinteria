<?php

use App\Http\Controllers\MuebleController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('muebles/fabricados/create', [MuebleController::class, 'indexFabricado'])->name('muebles.createFabricado');
Route::get('muebles/prefabricados/create', [MuebleController::class, 'indexPrefabricado'])->name('muebles.createPrefabricado');
Route::post('muebles/storeFabricado', [MuebleController::class, 'storeFabricado'])->name('muebles.storeFabricado');
Route::post('muebles/storePrefabricado', [MuebleController::class, 'storePrefabricado'])->name('muebles.storePrefabricado');
Route::resource('muebles', MuebleController::class);
Route::resource('pedidos', PedidoController::class);

require __DIR__.'/auth.php';
