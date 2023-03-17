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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{nombre?}',function ($nombre="invitado"){
   // return view('home');
   return "saludos ".$nombre;
});

Route::get('/menu',function (){
    return view ('menu');
});


Route::get('Home1',function (){
    return "Pagina de Home ";
})->name('inicio');

Route::get('Nosotros',function(){
    return "Pagina de nosotros";
})->name('nosotros');

Route::get('Mision',function(){
    return "Pagina de mision";
})->name('mision');

Route::get('Vision', function () {
    return "Pagina de vision";
})->name('vision');

Route::get('Contactos', function () {
    return "Pagina de contactos" ;   
})->name('contactos');



