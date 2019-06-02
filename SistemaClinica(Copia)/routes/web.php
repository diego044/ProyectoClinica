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
<<<<<<< HEAD
})-> name('menuadmin');

// Horarios

Route::get('adminhorarios/programacion', function () {
    return view('AdminProgramacionHorarios');
})-> name('programacionhorarios');

// Empleados
Route::get('adminempleados/administrar', function () {
    return view('AdminAdministrarEmplados');
})-> name('administrarempleados');

Route::get('adminempleados/nuevo', function () {
    return view('AdminNuevoEmpleado');
})-> name('nuevoempleados');

Route::get('adminempleados/detalle', function () {
    return view('AdminDetalleEmplados');
})-> name('detalleempleados');

Route::get('adminempleados/editar', function () {
    return view('AdminEditarEmpleado');
})-> name('editarempleados');
=======
});

Route::get('adminhorarios', function () {
    return view('AdministrarHorarios');
});

Route::get('adminmedicos', function () {
    return view('AdministrarHorarios');
});

Route::get('adminpacientes', function () {
    return view('AdministrarPaciente');
});

Route::get('adminmedico', function () {
    return view('AgregarMedico');
});

Route::get('adminhorarios/programacionhorarios', function () {
    return view('programacionhorarios');
});
>>>>>>> gonzalo



