<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\RolSistemaController;
use App\Http\Controllers\RolSistemasController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\CaracteristicaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\SeguridadController;
use App\Http\Controllers\DatosPersonalController;
use App\Http\Controllers\MantenimientoController;
use App\Models\Caracteristica;
use App\Models\RolSistema;
use App\Models\RolSistemas;
use App\Models\Sistema;
use League\CommonMark\Renderer\Block\DocumentRenderer;
use Spatie\Permission\Contracts\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resources(['usuario'   => UserController::class]);
    Route::resources(['sistema' => SistemaController::class]);
    Route::resources(['roles' => RolSistemaController::class]);

    Route::get('/usuarioBloqueado', [App\Http\Controllers\UserController::class, 'usuarioBloqueado'])->name('usuarioBloqueado');
});

Route::post('rolsistemas/{id}', [RolSistemasController::class, 'store'])->name('rolsistemas.store');
Route::post('informacion/{id}', [InformacionController::class, 'store'])->name('informacion.store');
Route::post('caracteristica/{id}', [CaracteristicaController::class, 'store'])->name('caracteristica.store');
Route::post('documento/{id}', [DocumentoController::class, 'store'])->name('documento.store');
Route::post('seguridad/{id}', [SeguridadController::class, 'store'])->name('seguridad.store');
Route::post('datosPersonal/{id}', [DatosPersonalController::class, 'store'])->name('datosPersonal.store');
Route::post('mantenimiento/{id}', [MantenimientoController::class, 'store'])->name('mantenimiento.store');

Route::post('documentoController/{id}/guardar-respuesta', [DocumentoController::class, 'guardarRespuesta'])->name('documentoController.guardarRespuesta');