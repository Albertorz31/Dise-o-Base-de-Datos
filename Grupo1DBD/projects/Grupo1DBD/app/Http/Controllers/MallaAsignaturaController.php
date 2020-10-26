<?php

namespace App\Http\Controllers;

use App\MallaAsignatura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class MallaAsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = MallaAsignatura::all();
        return View::make('malla_asignaturas.index')->with('malla_asignatura', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return MallaAsignatura
     */
    public function create()
    {
        $data = new MallaAsignatura();
        return View::make('malla_asignaturas.save')->with('malla_asignatura', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new MallaAsignatura();
        $data->id_malla = Input::get('id_malla');
        $data->id_asignatura = Input::get('id_asignatura');
        $data->save();
        return Redirect::to('malla_asignaturas')->with('notice', 'La malla_asignatura ha sido creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MallaAsignatura::find($id);
        return View::make('malla_asignaturas.show')->with('malla_asignatura', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MallaAsignatura::find($id);
        return View::make('malla_asignaturas.save')->with('malla_asignatura', $data);

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
        $data = MallaAsignatura::find($id);
        $data->id_malla = Input::get('id_malla');
        $data->id_asignatura = Input::get('id_asignatura');
        $data->save();
        return Redirect::to('malla_asignaturas')->with('notice', 'La malla_asignatura ha sido modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MallaAsignatura::find($id);
        $data->delete();
        return Redirect::to('malla_asignaturas')->with('notice', 'El malla_asignatura ha sido eliminada correctamente.');
    }
}
