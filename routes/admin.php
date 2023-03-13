<?php
/** rutas para el administrador y el supervisor */

use App\Http\Controllers\Admin\ClienteAdminController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

Route::resource('usuario', UserController::class)->except('show')->names('admin.user');
Route::post('usuario/habilitar/{user}', [UserController::class, 'habilitarUser'])->name('admin.user.habilitar');
/** rutas para administrar clientes */
Route::prefix('admin')->name('admin.cliente.')->group(function(){
    Route::get('clientes', [ClienteAdminController::class, 'index'])->name('index');
    Route::get('ver/cliente/{cliente}', [ClienteAdminController::class, 'verCliente'])->name('ver.cliente');
});

Route::prefix('admin')->name('admin.catergoria.producto.')->group(function(){
    Route::view('categoria_productos', 'livewire.categoria_productos.index')->middleware('auth')->name('index');
});

Route::prefix('admin')->name('admin.producto.')->group(function(){
    Route::view('productos', 'livewire.productos.index')->middleware('auth')->name('index');
});
