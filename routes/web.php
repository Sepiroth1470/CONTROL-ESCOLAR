<?php

/*
|--------------------------------------------------------------------------
| routes/web.php
|--------------------------------------------------------------------------
| Aquí se definen las rutas web de la aplicación
|
*/

use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta llamada "route"
Route::get('/route', function () {
    return "Esta es la página route";
});

// Ruta llamada "resources"
Route::get('/resources', function () {
    return "Esta es la página resources";
});