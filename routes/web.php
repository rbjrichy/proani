<?php

use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SimposioController;
use App\Http\Controllers\ThemeProaniController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
/** ejecutar comando artisan */

Route::get('artisan-cammand', function(){
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return view('theme.proanisrl.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('panel', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('panel.index');

/*** rutas para actualizar datos de perfil de usuario */
Route::get('perfil', [UserController::class, 'profile'])->middleware(['auth','verified'])->name('user.profile');
Route::post('avatar/update', [UserController::class, 'avatarUpdate'])->middleware(['auth','verified'])->name('avatar.update');
Route::post('password/update', [UserController::class, 'updatePassword'])->middleware(['auth','verified'])->name('mypassword.update');

/***
 * backups routes
 */
Route::group([
    'middleware' => ['auth', 'web'],
], function () {
    Route::get('backup', [BackupController::class, 'index'])->name('admin.backup.index');
    Route::put('backup/create', [BackupController::class, 'create'])->name('admin.backup.create');
    Route::get('backup/download/{file_name?}', [BackupController::class, 'download'])->name('admin.backup.download');
    Route::delete('backup/delete', [BackupController::class, 'delete'])->name('admin.backup.delete');
});

/** rutas simposio */
// Route::get('simposios', [SimposioController::class, 'index'])->name('simposio.index');

/** theme proani ThemeProaniController */
Route::group([
    'middleware' => ['web'],
], function () {
    Route::get('simposios', [ThemeProaniController::class, 'simposios'])->name('simposios');
    Route::get('ferias', [ThemeProaniController::class, 'ferias'])->name('ferias');
    Route::get('adopciones', [ThemeProaniController::class, 'adopcion'])->name('adopcion');
    Route::get('voluntariado', [ThemeProaniController::class, 'voluntariado'])->name('voluntariado');
    Route::get('videos', [ThemeProaniController::class, 'videos'])->name('videos');
    Route::get('knino', [ThemeProaniController::class, 'knino'])->name('knino');
    Route::get('knino-detalle/{producto}', [ThemeProaniController::class, 'kninodetalle'])->name('knino.detalle');
    Route::get('ktito', [ThemeProaniController::class, 'ktito'])->name('ktito');
    Route::get('ktito-detalle/{producto}', [ThemeProaniController::class, 'ktitodetalle'])->name('ktito.detalle');
    Route::get('ganaderia', [ThemeProaniController::class, 'ganaderia'])->name('ganaderia');
    Route::get('ganaderia/detalle/{categoria}', [ThemeProaniController::class, 'ganaderiadetalle'])->name('ganaderiadetalle');
    Route::get('peces', [ThemeProaniController::class, 'peces'])->name('peces');
    Route::get('quienes-somos', [ThemeProaniController::class, 'quienes_somos'])->name('quienessomos');
    Route::get('contacto', [ThemeProaniController::class, 'contacto'])->name('contacto');
    Route::get('guia/alimentaria', [ThemeProaniController::class, 'guia_alimentaria'])->name('guia_alimentaria');

});

//Route Hooks - Do not delete//


