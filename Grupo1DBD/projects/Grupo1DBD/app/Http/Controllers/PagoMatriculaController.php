<?php

namespace App\Http\Controllers;
use App\PagoMatricula;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PagoMatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagoMatricula = PagoMatricula::all();
        return View::make('pago_matriculas.index')->with('pago_matriculas', $pagoMatricula);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagoMatricula = new PagoMatricula();
        return View::make('pago_matriculas.save')->with('pago_matricula', $pagoMatricula);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pagoMatricula =new PagoMatricula();
        $pagoMatricula->id_pago = Input::get('id_pago');
        $pagoMatricula->id_matricula = Input::get('id_matricula');
        $pagoMatricula->fecha = Input::get('fecha');
        $pagoMatricula->save();
        return Redirect::to('pago_matriculas')->with('notice', 'El Pago_Matricula ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagoMatricula = PagoMatricula::find($id);
        return View::make('pago_matriculas.show')->with('pago_matricula', $pagoMatricula);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagoMatricula = PagoMatricula::find($id);
        return View::make('pago_matriculas.save')->with('pago_matricula', $pagoMatricula);
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
        $pagoMatricula = PagoMatricula::find($id);
        $pagoMatricula->id_pago = Input::get('id_pago');
        $pagoMatricula->id_matricula = Input::get('id_matricula');
        $pagoMatricula->fecha = Input::get('fecha');
        $pagoMatricula->save();
        return Redirect::to('pago_matriculas')->with('notice', 'El Pago_Matricula ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagoMatricula = PagoMatricula::find($id);
        $pagoMatricula->delete();
        return Redirect::to('pago_matriculas')->with('notice', 'El Pago_Matricula ha sido eliminado correctamente.'); 
    }
}
