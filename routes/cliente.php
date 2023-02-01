<?php
/** rutas para el cliente online*/

use App\Http\Controllers\Cliente\MascotaController;
use Illuminate\Support\Facades\Route;

Route::resource('mascota', MascotaController::class)->except('show')->names('mascota');
// Route::resource('mascota', MascotaController::class)->except('show')->names('mascota');

