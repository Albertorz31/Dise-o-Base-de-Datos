<?php

namespace App\Http\Controllers;
use App\AdministradorEstudiante;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdministradorEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradorEstudiante = AdministradorEstudiante::all();
        return View::make('administrador_estudiantes.index')->with('administrador_estudiantes', $administradorEstudiante);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administradorEstudiante = new AdministradorEstudiante();
        return View::make('administrador_estudiantes.save')->with('administrador_estudiante', $administradorEstudiante);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $administradorEstudiante = new AdministradorEstudiante();
        $administradorEstudiante->id_administrador = Input::get('id_administrador');
        $administradorEstudiante->id_estudiante = Input::get('id_estudiante');
        $administradorEstudiante->save();
        return Redirect::to('administrador_estudiantes')->with('notice', 'El Administrador_Estudiante ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administradorEstudiante = AdministradorEstudiante::find($id);
        return View::make('administrador_estudiantes.show')->with('administrador_estudiante', $administradorEstudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administradorEstudiante = AdministradorEstudiante::find($id);
        return View::make('administrador_estudiantes.save')->with('administrador_estudiante', $administradorEstudiante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $administradorEstudiante = AdministradorEstudiante::find($id);
        $administradorEstudiante->id_administrador = Input::get('id_administrador');
        $administradorEstudiante->id_estudiante = Input::get('id_estudiante');
        $administradorEstudiante->save();
        return Redirect::to('administrador_estudiantes')->with('notice', 'El Administrador_Estudiante  ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administradorEstudiante = AdministradorEstudiante::find($id);
        $administradorEstudiante->delete();
        return Redirect::to('administrador_estudiantes')->with('notice', 'El Administrador_Estudiante ha sido eliminado correctamente.');
    }
}