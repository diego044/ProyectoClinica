<?php

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


Route::get('adminmenu', function () {
    return view('MenuAdmin');
});

Route::get('adminhorarios', function () {
    return view('AdministrarHorarios');
});

Route::get('adminmedicos', function () {
    return view('AdministrarMedicos');
});

Route::get('adminpacientes', function () {
    return view('AdministrarPaciente');
});

Route::get('agregarmedico', function () {
    return view('AgregarMedico');
});

Route::get('programacionhorarios', function () {
    return view('ProgramacionHorarios');
});



