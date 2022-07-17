<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Quiero usar el controlador asi que lo importo, se importa con namespace/NombreClase
use App\Http\Controllers\ClientesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//La ruta puede ser post o get (post para enviar cosas a la bd, get para obtener)
Route::get("regiones/get", [ClientesController::class, "getRegiones"]);
//Route::get("url", [controlador::class, "metodo"]);

Route::get("clientes/get", [ClientesController::class, "getClientes"]);

Route::post("clientes/post", [ClientesController::class, "crearCliente"]);
Route::post("clientes/delete", [ClientesController::class, "eliminarCliente"]);


