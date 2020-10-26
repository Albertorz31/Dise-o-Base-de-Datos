<?php

namespace App\Http\Controllers;
use App\Utilidad;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class UtilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //get
    public function index()
    {
        //
        $utilidad = Utilidad::all();
        return View::make('utilidads.index')->with('utilidads', $utilidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //post
    public function create()
    {
        //
        $utilidad = new Utilidad();
        return View::make('utilidads.save')->with('utilidad', $utilidad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //post
    public function store(Request $request)
    {
        //
        $utilidad =new Utilidad();
        $utilidad->documentos_disponibles = Input::get('documentos_disponibles');
        $utilidad->certificados_disponibles = Input::get('certificados_disponibles');
        $utilidad->solicitudes_enviadas = Input::get('solicitudes_enviadas');
        $utilidad->id_estudiante = Input::get('id_estudiante');
        $utilidad->save();
        return Redirect::to('utilidads')->with('notice', 'Utilidad ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //get
    public function show($id)
    {
        //
        $utilidad = Utilidad::find($id);
        return View::make('utilidads.show')->with('utilidad', $utilidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //put
    public function edit($id)
    {
        //
        $utilidad = Utilidad::find($id);
        return View::make('utilidads.save')->with('utilidad', $utilidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //put
    public function update(Request $request, $id)
    {
        //
        $utilidad = Utilidad::find($id);
        $utilidad->documentos_disponibles = Input::get('documentos_disponibles');
        $utilidad->certificados_disponibles = Input::get('certificados_disponibles');
        $utilidad->solicitudes_enviadas = Input::get('solicitudes_enviadas');
        $utilidad->id_estudiante = Input::get('id_estudiante');
        $utilidad->save();
        return Redirect::to('utilidads')->with('notice', 'Utilidad ha sido modificado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //delete
    public function destroy($id)
    {
        //
        $utilidad = Utilidad::find($id);
        $utilidad->delete();
        return Redirect::to('utilidads')->with('notice', 'Utilidad ha sido eliminado correctamente.');
    }
}
