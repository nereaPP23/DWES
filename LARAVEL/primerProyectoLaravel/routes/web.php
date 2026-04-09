<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function()
{
return '¡Hola mundo!';
});

Route::get('ruta1/{id?}', function($id=0)
{
return 'Esto es la ruta 1 con id '.$id;
});

Route::get('ruta2', function()
{
return 'Esto es la ruta 2';
});
