<?php

namespace App\Http\Controllers;

use App\Matricula;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matricula = Matricula::all();
        return View::make('matriculas.index')->with('matriculas', $matricula);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matricula = new Matricula();
        return View::make('matriculas.save')->with('matricula', $matricula);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matricula = new Matricula();
        $matricula->semestre_matricula = Input::get('semestre_matricula');
        $matricula->monto_matricula = Input::get('monto_matricula');
        $matricula->fecha_vencimiento_matricula = Input::get('fecha_vencimiento_matricula');
        $matricula->id_pago = Input::get('id_pago');
        $matricula->id_historial_de_pago = Input::get('id_historial_de_pago');
        $matricula->save();
        return Redirect::to('matriculas')->with('notice', 'La matricula ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matricula = Matricula::find($id);
        return View::make('matriculas.show')->with('matricula', $matricula);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matricula = Matricula::find($id);
        return View::make('matriculas.save')->with('matricula', $matricula);
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
        $matricula = Matricula::find($id);
        $matricula->semestre_matricula = Input::get('semestre_matricula');
        $matricula->monto_matricula = Input::get('monto_matricula');
        $matricula->fecha_vencimiento_matricula = Input::get('fecha_vencimiento_matricula');
        $matricula->id_pago = Input::get('id_pago');
        $matricula->id_historial_de_pago = Input::get('id_historial_de_pago');
        $matricula->save();
        return Redirect::to('matriculas')->with('notice', 'La matricula ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matricula = Matricula::find($id);
        $matricula->destroy($id);
        return Redirect::to('matriculas')->with('notice', 'La matricula ha sido eliminado correctamente.');
    }
}
