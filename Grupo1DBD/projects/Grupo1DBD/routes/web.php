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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/accesoNegado',function(){
	return view('accesoNegado');

})->name('accesoNegado');
Route::get('/administrar', function () {
    return view('administrar');
});

Route::get('/administrar', function () {
    return view('administrar');
});



Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/mallas', 'MallaController@index');
Route::get('/mallas/create', 'MallaController@create');
Route::post('/mallas', 'MallaController@store');
Route::get('/mallas/{id}', 'MallaController@show');
Route::get('/mallas/{id}/edit', 'MallaController@edit');
Route::put('/mallas/{id}', 'MallaController@update');
Route::patch('/mallas/{id}', 'MallaController@update');
Route::delete('/mallas/{id}', 'MallaController@destroy');

Route::get('/carreras', 'CarreraController@index');
Route::get('/carreras/create', 'CarreraController@create');
Route::post('/carreras', 'CarreraController@store');
Route::get('/carreras/{id}', 'CarreraController@show');
Route::get('/carreras/{id}/edit', 'CarreraController@edit');
Route::put('/carreras/{id}', 'CarreraController@update');
Route::patch('/carreras/{id}', 'CarreraController@update');
Route::delete('/carreras/{id}', 'CarreraController@destroy');

Route::get('/mensajes', 'MensajeController@index');
Route::get('/mensajes/create', 'MensajeController@create');
Route::post('/mensajes', 'MensajeController@store');
Route::get('/mensajes/{id}', 'MensajeController@show');
Route::get('/mensajes/{id}/edit', 'MensajeController@edit');
Route::put('/mensajes/{id}', 'MensajeController@update');
Route::patch('/mensajes/{id}', 'MensajeController@update');
Route::delete('/mensajes/{id}', 'MensajeController@destroy');


Route::get('/direccions', 'DireccionController@index');
Route::get('/direccions/create', 'DireccionController@create');
Route::post('/direccions', 'DireccionController@store');
Route::get('/direccions/{id}', 'DireccionController@show');
Route::get('/direccions/{id}/edit', 'DireccionController@edit');
Route::put('/direccions/{id}', 'DireccionController@update');
Route::patch('/direccions/{id}', 'DireccionController@update');
Route::delete('/direccions/{id}', 'DireccionController@destroy');

Route::get('/facultads','FacultadController@index');
Route::get('/facultads/create','FacultadController@create');
Route::post('/facultads','FacultadController@store');
Route::get('/facultads/{id}','FacultadController@show');
Route::get('/facultads/{id}/edit','FacultadController@edit');
Route::put('/facultads/{id}','FacultadController@update');
Route::patch('/facultads/{id}','FacultadController@update');
Route::delete('/facultads/{id}','FacultadController@destroy');

Route::get('/asignaturas','AsignaturaController@index');
Route::get('/asignaturas/create','AsignaturaController@create');
Route::post('/asignaturas','AsignaturaController@store');
Route::get('/asignaturas/{id}','AsignaturaController@show');
Route::get('/asignaturas/{id}/edit','AsignaturaController@edit');
Route::put('/asignaturas/{id}','AsignaturaController@update');
Route::patch('/asignaturas/{id}','AsignaturaController@update');
Route::delete('/asignaturas/{id}','AsignaturaController@destroy');
Route::get('/asignaturas/buscarmalla/{id_malla}','AsignaturaController@buscarMalla');

Route::get('/seccions','SeccionController@index');
Route::get('/seccions/create','SeccionController@create');
Route::post('/seccions','SeccionController@store');
Route::get('/seccions/{id}','SeccionController@show');
Route::get('/seccions/{id}/edit','SeccionController@edit');
Route::put('/seccions/{id}','SeccionController@update');
Route::patch('/seccions/{id}','SeccionController@update');
Route::delete('/seccions/{id}','SeccionController@destroy');
Route::get('/seccions/buscarhorario/{id_horario}','SeccionController@buscarHorario');
Route::get('/seccions/buscarasignatura/{id_asignatura}','SeccionController@buscarAsignatura');

Route::get('/horarios','HorarioController@index');
Route::get('/horarios/create','HorarioController@create');
Route::post('/horarios','HorarioController@store');
Route::get('/horarios/{id}','HorarioController@show');
Route::get('/horarios/{id}/edit','HorarioController@edit');
Route::put('/horarios/{id}','HorarioController@update');
Route::patch('/horarios/{id}','HorarioController@update');
Route::delete('/horarios/{id}','HorarioController@destroy');

Route::get('/matriculas','MatriculaController@index');
Route::get('/matriculas/create','MatriculaController@create');
Route::post('/matriculas','MatriculaController@store');
Route::get('/matriculas/{id}','MatriculaController@show');
Route::get('/matriculas/{id}/edit','MatriculaController@edit');
Route::put('/matriculas/{id}','MatriculaController@update');
Route::patch('/matriculas/{id}','MatriculaController@update');
Route::delete('/matriculas/{id}','MatriculaController@destroy');

Route::get('/arancels','ArancelController@index');
Route::get('/arancels/create','ArancelController@create');
Route::post('/arancels','ArancelController@store');
Route::get('/arancels/{id}','ArancelController@show');
Route::get('/arancels/{id}/edit','ArancelController@edit');
Route::put('/arancels/{id}','ArancelController@update');
Route::patch('/arancels/{id}','ArancelController@update');
Route::delete('/arancels/{id}','ArancelController@destroy');


Route::get('/pagos/create','PagoController@create');
Route::post('/pagos','PagoController@store');
Route::get('/pagos/{id}','PagoController@show');
Route::get('/pagos/{id}/edit','PagoController@edit');
Route::put('/pagos/{id}','PagoController@update');
Route::patch('/pagos/{id}','PagoController@update');
Route::delete('/pagos/{id}','PagoController@destroy');
Route::get('/pagos/mostrarEstudiante/{id}','PagoController@mostrarEstudiante');

Route::get('/historial_de_pagos','HistorialDePagoController@index');
Route::get('/historial_de_pagos/create','HistorialDePagoController@create');
Route::post('/historial_de_pagos','HistorialDePagoController@store');
Route::get('/historial_de_pagos/{id}','HistorialDePagoController@show');
Route::get('/historial_de_pagos/{id}/edit','HistorialDePagoController@edit');
Route::put('/historial_de_pagos/{id}','HistorialDePagoController@update');
Route::patch('/historial_de_pagos/{id}','HistorialDePagoController@update');
Route::delete('/historial_de_pagos/{id}','HistorialDePagoController@destroy');

Route::get('/malla_asignaturas','MallaAsignaturaController@index');
Route::get('/malla_asignaturas/create','MallaAsignaturaController@create');
Route::post('/malla_asignaturas','MallaAsignaturaController@store');
Route::get('/malla_asignaturas/{id}','MallaAsignaturaController@show');
Route::get('/malla_asignaturas/{id}/edit','MallaAsignaturaController@edit');
Route::put('/malla_asignaturas/{id}','MallaAsignaturaController@update');
Route::patch('/malla_asignaturas/{id}','MallaAsignaturaController@update');
Route::delete('/malla_asignaturas/{id}','MallaAsignaturaController@destroy');

Route::get('/utilidads', 'UtilidadController@index');
Route::get('/utilidads/create', 'UtilidadController@create');
Route::post('/utilidads', 'UtilidadController@store');
Route::get('/utilidads/{id}', 'UtilidadController@show');
Route::get('/utilidads/{id}/edit', 'UtilidadController@edit');
Route::put('/utilidads/{id}', 'UtilidadController@update');
Route::patch('/utilidads/{id}', 'UtilidadController@update');
Route::delete('/utilidads/{id}', 'UtilidadController@destroy');


Route::get('/documentos/create','DocumentoController@create');
Route::post('/documentos','DocumentoController@store')->name('file.store');
Route::get('/documentos/{id}','DocumentoController@show');
Route::get('/documentos/{id}/edit','DocumentoController@edit');
Route::put('/documentos/{id}','DocumentoController@update');
Route::patch('/documentos/{id}','DocumentoController@update');
Route::delete('/documentos/{id}','DocumentoController@destroy');

Route::get('/pago_matriculas','PagoMatriculaController@index');
Route::get('/pago_matriculas/create','PagoMatriculaController@create');
Route::post('/pago_matriculas','PagoMatriculaController@store');
Route::get('/pago_matriculas/{id}','PagoMatriculaController@show');
Route::get('/pago_matriculas/{id}/edit','PagoMatriculaController@edit');
Route::put('/pago_matriculas/{id}','PagoMatriculaController@update');
Route::patch('/pago_matriculas/{id}','PagoMatriculaController@update');
Route::delete('/pago_matriculas/{id}','PagoMatriculaController@destroy');

Route::get('/pago_arancels','PagoArancelController@index');
Route::get('/pago_arancels/create','PagoArancelController@create');
Route::post('/pago_arancels','PagoArancelController@store');
Route::get('/pago_arancels/{id}','PagoArancelController@show');
Route::get('/pago_arancels/{id}/edit','PagoArancelController@edit');
Route::put('/pago_arancels/{id}','PagoArancelController@update');
Route::patch('/pago_arancels/{id}','PagoArancelController@update');
Route::delete('/pago_arancels/{id}','PagoArancelController@destroy');

Route::get('/pago_historial','PagoHistorialController@index');
Route::get('/pago_historial/create','PagoHistorialController@create');
Route::post('/pago_historial','PagoHistorialController@store');
Route::get('/pago_historial/{id}','PagoHistorialController@show');
Route::get('/pago_historial/{id}/edit','PagoHistorialController@edit');
Route::put('/pago_historial/{id}','PagoHistorialController@update');
Route::patch('/pago_historial/{id}','PagoHistorialController@update');
Route::delete('/pago_historial/{id}','PagoHistorialController@destroy');

Route::get('/pago_historials','PagoHistorialController@index');
Route::get('/pago_historials/create','PagoHistorialController@create');
Route::post('/pago_historials','PagoHistorialController@store');
Route::get('/pago_historials/{id}','PagoHistorialController@show');
Route::get('/pago_historials/{id}/edit','PagoHistorialController@edit');
Route::put('/pago_historials/{id}','PagoHistorialController@update');
Route::patch('/pago_historials/{id}','PagoHistorialController@update');
Route::delete('/pago_historials/{id}','PagoHistorialController@destroy');

Route::get('/seccion_estudiantes','SeccionEstudianteController@index');
Route::get('/seccion_estudiantes/create','SeccionEstudianteController@create');
Route::post('/seccion_estudiantes','SeccionEstudianteController@store');
Route::get('/seccion_estudiantes/{id}','SeccionEstudianteController@show');
Route::get('/seccion_estudiantes/{id}/edit','SeccionEstudianteController@edit');
Route::put('/seccion_estudiantes/{id}','SeccionEstudianteController@update');
Route::patch('/seccion_estudiantes/{id}','SeccionEstudianteController@update');
Route::delete('/seccion_estudiantes/{id}','SeccionEstudianteController@destroy');
Route::get('/seccion_estudiantes/buscarseccion/{id_seccion}','SeccionEstudianteController@buscarSeccion');
Route::get('/seccion_estudiantes/buscarestudiante/{id_estudiante}','SeccionEstudianteController@buscarestudiante');

Route::get('/seccion_profesors','SeccionProfesorController@index');
Route::get('/seccion_profesors/create','SeccionProfesorController@create');
Route::post('/seccion_profesors','SeccionProfesorController@store');
Route::get('/seccion_profesors/{id}','SeccionProfesorController@show');
Route::get('/seccion_profesors/{id}/edit','SeccionProfesorController@edit');
Route::put('/seccion_profesors/{id}','SeccionProfesorController@update');
Route::patch('/seccion_profesors/{id}','SeccionProfesorController@update');
Route::delete('/seccion_profesors/{id}','SeccionProfesorController@destroy');


//Route::get('login/admin', 'Auth\LoginController@showAdminLoginForm');

//Route::post('login/admin', 'Auth\LoginController@adminLogin');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//Administrador 
Route::get('administradors/adminLogin','AdministradorController@showLoginForm');
Route::post('administradors/adminLogin','AdministradorController@login');
//Rutas protegidas por guard de admin (solo se puede acceder a ellas si entras como administrador)
Route::group(['middleware' => ['auth:admin']], function(){
	Route::get('administradors/adminHome','AdministradorController@secret')->name('admin.home');
	Route::get('administradors/administradorDetalle','AdministradorController@detalle');	
});

//Profesor
Route::get('profesors/profesorLogin','ProfesorController@showLoginForm');
Route::post('profesors/profesorLogin','ProfesorController@login');
//Rutas protegidas por guard de profesor (solo se puede acceder a ellas si entras como administrador)
Route::group(['middleware' => ['auth:profesor']], function(){
	Route::get('profesors/profesorHome','ProfesorController@secret')->name('profesor.home');
	Route::get('profesors/profesorDetalle', 'ProfesorController@detalle');
	Route::get('profesors/profesorDocuments','DocumentoController@indexProfesor');
	Route::get('profesors/profesorSave','DocumentoController@createProfesor');
	Route::get('profesors/profesorHorario/{id}','ProfesorController@verHorario');
	Route::get('profesors/profesorCursos/{id}','ProfesorController@verCursos');
	Route::get('profesors/profesorAlumnos/{id}','ProfesorController@verAlumnos');
    Route::get('profesors/profesorAlumnos2/{id}','ProfesorController@verAlumnosAgain');
    Route::get('profesors/profesorNotas/{id}','ProfesorController@ponerNotas');
	Route::post('profesors/profesorDocuments','DocumentoController@storeProfesor')->name('file.store');
    Route::get('profesors/profesorMensajeEnviado/{id}', 'ProfesorController@verMensajesEnviados');
    Route::get('profesors/profesorMensajeRecibido/{id}', 'ProfesorController@verMensajesRecibidos');
    Route::get('profesors/profesorMensajeEscribir/{id}/{destino}', 'ProfesorController@verMensajeEscribir');
    Route::post('profesors/profesorMensajeEscribir/{id_profesor}/{destino}', 'MensajeController@enviarMensajeProfesor');

});

//estudiante
Route::get('estudiantes/estudianteLogin','EstudianteController@showLoginForm');
Route::post('estudiantes/estudianteLogin','EstudianteController@login');
//Rutas protegidas por guard de estudiante (solo se puede acceder a ellas si entras como administrador)
Route::group(['middleware' => ['auth:estudiante']], function(){
	Route::get('estudiantes/estudianteHome','EstudianteController@secret');
	Route::get('estudiantes/estudianteDetalle', 'EstudianteController@detalle');
	Route::get('estudiantes/estudianteDetalleCurricular', 'EstudianteController@detalleCurricular');
	Route::get('estudiantes/estudianteMalla', 'EstudianteController@vistaMalla');
    Route::get('estudiantes/estudianteInscribir/{id}', 'EstudianteController@vistaTomarRamos');
    Route::get('estudiantes/estudianteHorario/{id}', 'EstudianteController@verHorario');
    Route::get('estudiantes/estudianteCalificaciones/{id}','EstudianteController@verCalificaciones');
    Route::get('estudiantes/estudiantePago/{id}','EstudianteController@verPago');
    Route::get('estudiantes/estudianteNuevoPago/{id}/{matricula}','EstudianteController@crearPago');
    Route::post('estudiantes/estudiantePago/{id}','EstudianteController@storePago');
    Route::put('estudiantes/estudiantePago/{id}','EstudianteController@updatePago');
    Route::patch('estudiantes/estudiantePago/{id}','EstudianteController@updatePago');
    Route::get('estudiantes/estudianteDesinscribir/{id}', 'EstudianteController@vistaBotarRamos');
    Route::get('estudiantes/estudianteMensajeEnviado/{id}', 'EstudianteController@verMensajesEnviados');
    Route::get('estudiantes/estudianteMensajeRecibido/{id}', 'EstudianteController@verMensajesRecibidos');
    Route::get('estudiantes/estudianteMensajeEscribir/{id}/{destino}', 'EstudianteController@verMensajeEscribir');
    Route::post('estudiantes/estudianteMensajeEscribir/{id_estudiante}/{destino}', 'MensajeController@enviarMensajeEstudiante');
    Route::get('estudiantes/estudianteInscribir/{estudiante}/{seccion}', 'EstudianteController@inscribir');
    Route::get('estudiantes/estudianteDesinscribir/{estudiante}/{seccion}', 'EstudianteController@desinscribir');
    Route::get('/documentos','DocumentoController@index');
    Route::get('/pagos','PagoController@index');
    
});

//Coordinador
Route::get('coordinadors/coordinadorLogin','CoordinadorController@showLoginForm');
Route::post('coordinadors/coordinadorLogin','CoordinadorController@login');
//Rutas protegidas por guard de coordinador (solo se puede acceder a ellas si entras como administrador)
Route::group(['middleware' => ['auth:coordinador']], function(){
	Route::get('coordinadors/coordinadorHome','CoordinadorController@secret');
	Route::get('coordinadors/coordinadorDetalle','CoordinadorController@detalle');
	Route::get('/estudiantes/create', 'EstudianteController@create');
	Route::get('/coordinadors/coordinadorDocuments','DocumentoController@indexCoordinador');
	Route::get('/coordinadors/coordinadorSave','DocumentoController@createCoordinador');
	Route::post('/coordinadors/coordinadorDocuments','DocumentoController@storeCoordinador')->name('file.store');
    Route::get('coordinadors/coordinadorMensajeEnviado/{id}', 'CoordinadorController@verMensajesEnviados');
    Route::get('coordinadors/coordinadorMensajeRecibido/{id}', 'CoordinadorController@verMensajesRecibidos');
    Route::get('coordinadors/coordinadorMensajeEscribir/{id}/{destino}', 'CoordinadorController@verMensajeEscribir');
    Route::post('coordinadors/coordinadorMensajeEscribir/{id_coordinador}/{destino}', 'MensajeController@enviarMensajeCoordinador');
    Route::get('/seccions','SeccionController@index');
    Route::get('/seccions/create','SeccionController@create');
    Route::post('/seccions','SeccionController@store');
    Route::get('/seccions/{id}','SeccionController@show');
    Route::get('/seccions/{id}/edit','SeccionController@edit');
    Route::put('/seccions/{id}','SeccionController@update');
    Route::patch('/seccions/{id}','SeccionController@update');
    Route::delete('/seccions/{id}','SeccionController@destroy');
    Route::get('/horarios','HorarioController@index');
    Route::get('/horarios/create','HorarioController@create');
    Route::post('/horarios','HorarioController@store');
    Route::get('/horarios/{id}','HorarioController@show');
    Route::get('/horarios/{id}/edit','HorarioController@edit');
    Route::put('/horarios/{id}','HorarioController@update');
    Route::patch('/horarios/{id}','HorarioController@update');
    Route::delete('/horarios/{id}','HorarioController@destroy');

});


Route::get('/coordinadors/download/{item}','CoordinadorController@download');
Route::get('/coordinadors', 'CoordinadorController@index');
Route::get('/coordinadors/create', 'CoordinadorController@create');
Route::post('/coordinadors', 'CoordinadorController@store');
Route::get('/coordinadors/{id}', 'CoordinadorController@show');
Route::get('/coordinadors/{id}/edit', 'CoordinadorController@edit');
Route::put('/coordinadors/{id}', 'CoordinadorController@update');
Route::patch('/coordinadors/{id}', 'CoordinadorController@update');
Route::delete('/coordinadors/{id}', 'CoordinadorController@destroy');
Route::get('/coordinadors/{id}/edit', 'CoordinadorController@edit');

Route::get('/administradors/download/{item}','AdministradorController@download');
Route::get('/administradors', 'AdministradorController@index');
Route::get('/administradors/create', 'AdministradorController@create');
Route::post('/administradors', 'AdministradorController@store');
Route::get('/administradors/{id}', 'AdministradorController@show');
Route::get('/administradors/{id}/edit', 'AdministradorController@edit');
Route::put('/administradors/{id}', 'AdministradorController@update');
Route::patch('/administradors/{id}', 'AdministradorController@update');
Route::delete('/administradors/{id}', 'AdministradorController@destroy');


Route::get('/profesors/download/{item}','ProfesorController@download');
Route::get('/profesors', 'ProfesorController@index');
Route::get('/profesors/create', 'ProfesorController@create');
Route::post('/profesors', 'ProfesorController@store');
Route::get('/profesors/{id}', 'ProfesorController@show');
Route::get('/profesors/{id}/edit', 'ProfesorController@edit');
Route::put('/profesors/{id}', 'ProfesorController@update');
Route::patch('/profesors/{id}', 'ProfesorController@update');
Route::delete('/profesors/{id}', 'ProfesorController@destroy');


Route::get('/estudiantes/download/{item}','EstudianteController@download');
Route::get('/estudiantes', 'EstudianteController@index');
Route::get('/estudiantes/create', 'EstudianteController@create');
Route::post('/estudiantes', 'EstudianteController@store');
Route::get('/estudiantes/{id}', 'EstudianteController@show');
Route::get('/estudiantes/{id}/edit', 'EstudianteController@edit');
Route::put('/estudiantes/{id}', 'EstudianteController@update');
Route::patch('/estudiantes/{id}', 'EstudianteController@update');
Route::delete('/estudiantes/{id}', 'EstudianteController@destroy');

