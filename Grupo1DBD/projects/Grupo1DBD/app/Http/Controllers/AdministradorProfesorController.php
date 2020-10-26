<?php

namespace App\Http\Controllers;
use App\AdministradorProfesor;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdministradorProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradorProfesor = AdministradorProfesor::all();
        return View::make('administrador_profesors.index')->with('administrador_profesors', $administradorProfesor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administradorProfesor = new AdministradorProfesor();
        return View::make('administrador_profesors.save')->with('administrador_profesor', $administradorProfesor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $administradorProfesor = new PagoHistorial();
        $administradorProfesor->id_administrador = Input::get('id_administrador');
        $administradorProfesor->id_profesor = Input::get('id_profesor');
        $administradorProfesor->save();
        return Redirect::to('administrador_profesors')->with('notice', 'El Administrador_Profesor ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administradorProfesor = AdministradorProfesor::find($id);
        return View::make('administrador_profesors.show')->with('administrador_profesor', $administradorProfesor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administradorProfesor = AdministradorProfesor::find($id);
        return View::make('administrador_profesors.save')->with('administrador_profesor', $administradorProfesor);
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
        $administradorProfesor = AdministradorProfesor::find($id);
        $administradorProfesor->id_administrador = Input::get('id_administrador');
        $administradorProfesor->id_profesor = Input::get('id_profesor');
        $administradorProfesor->save();
        return Redirect::to('administrador_profesors')->with('notice', 'El Administrador_Profesor ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administradorProfesor = AdministradorProfesor::find($id);
        $administradorProfesor->delete();
        return Redirect::to('administrador_profesors')->with('notice', 'El Administrador_Profesor ha sido eliminado correctamente.');
    }
}
