<?php

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

Route::view("/","index")->name("index");
Route::view("/registro_cliente", "registro_cliente")->name("registro_cliente");
Route::view("/ver_clientes", "ver_clientes")->name("ver_clientes");

