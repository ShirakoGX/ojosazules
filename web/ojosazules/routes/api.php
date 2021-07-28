<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("tipos/get", [ConsolasController::class, "getTipos"]);
Route::get("medidas/get", [ConsolasController::class, "getMedidas"]);

Route::get("consolas/get",[ConsolasController::class,"getConsolas"]);
Route::post("consolas/post",[ConsolasController::class,"crearConsola"]);
Route::post("consolas/delete", [ConsolasController::class,"eliminarConsola"]);