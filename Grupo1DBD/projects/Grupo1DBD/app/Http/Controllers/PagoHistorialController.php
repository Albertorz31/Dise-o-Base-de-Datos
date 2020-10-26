<?php

namespace App\Http\Controllers;
use App\PagoHistorial;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PagoHistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagoHistorial = PagoHistorial::all();
        return View::make('pago_historials.index')->with('pago_historials', $pagoHistorial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagoHistorial = new PagoHistorial();
        return View::make('pago_historials.save')->with('pago_historial', $pagoHistorial);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pagoHistorial = new PagoHistorial();
        $pagoHistorial->id_pago = Input::get('id_pago');
        $pagoHistorial->id_historial = Input::get('id_historial');
        $pagoHistorial->save();
        return Redirect::to('pago_historials')->with('notice', 'El Pago_Historial ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagoHistorial = PagoHistorial::find($id);
        return View::make('pago_historials.show')->with('pago_historial', $pagoHistorial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagoHistorial = PagoHistorial::find($id);
        return View::make('pago_historials.save')->with('pago_historial', $pagoHistorial);
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
        $pagoHistorial = PagoHistorial::find($id);
        $pagoHistorial->id_pago = Input::get('id_pago');
        $pagoHistorial->id_historial = Input::get('id_historial');
        $pagoHistorial->fecha = Input::get('fecha');
        $pagoHistorial->save();
        return Redirect::to('pago_historials')->with('notice', 'El Pago_Historial ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagoHistorial = PagoHistorial::find($id);
        $pagoHistorial->delete();
        return Redirect::to('pago_historials')->with('notice', 'El Pago_Historial ha sido eliminado correctamente.'); 
    }
}
