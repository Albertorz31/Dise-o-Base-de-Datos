<?php

namespace App\Http\Controllers;
use App\SeccionProfesor;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class SeccionProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccionProfesor = SeccionProfesor::all();
        return View::make('seccion_profesors.index')->with('seccion_profesors',$seccionProfesor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seccionProfesor = new SeccionProfesor();
        return View::make('seccion_profesors.save')->with('seccion_profesor',$seccionProfesor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seccionProfesor = new SeccionProfesor();
        $seccionProfesor->id_profesor = Input::get('id_profesor');
        $seccionProfesor->id_seccion = Input::get('id_seccion');
        $seccionProfesor->semestre = Input::get('semestre');
        $seccionProfesor->save();
        return Redirect::to('seccion_profesors')->with('notice', 'La sección_profesor ha sido creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seccionProfesor = SeccionProfesor::find($id);
        return View::make('seccion_profesors.show')->with('seccion_profesor', $seccionProfesor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $seccionProfesor = SeccionProfesor::find($id);
        return View::make('seccion_profesors.save')->with('seccion_profesor', $seccionProfesor);
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
        $seccionProfesor = SeccionProfesor::find($id);
        $seccionProfesor->id_profesor = Input::get('id_profesor');
        $seccionProfesor->id_seccion = Input::get('id_seccion');
        $seccionProfesor->semestre = Input::get('semestre');
        $seccionProfesor->save();
        return Redirect::to('seccion_profesors')->with('notice', 'La sección_profesor ha sido modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seccionProfesor = SeccionProfesor::find($id);
        $seccionProfesor->delete();
        return Redirect::to('seccion_profesors')->with('notice', 'La sección_profesor ha sido eliminada correctamente.');
    }
}
