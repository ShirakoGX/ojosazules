<?php

use Illuminate\Support\Facades\Route;


Route::view("/","home")->name("home");
Route::view("/ver_lo_ingresado","ver_lo_ingresado")->name("ver_lo_ingresado");
Route::view("/ver_uno","ver_uno")->name("ver_uno");

