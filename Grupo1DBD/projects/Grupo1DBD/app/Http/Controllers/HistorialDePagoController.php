<?php

namespace App\Http\Controllers;

use App\HistorialDePago;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class HistorialDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialDePago = HistorialDePago::all();
        return View::make('historial_de_pagos.index')->with('historial_de_pagos', $historialDePago);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historialDePago = new HistorialDePago();
        return View::make('historial_de_pagos.save')->with('historial_de_pagos', $historialDePago);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historialDePago = new HistorialDePago();
        $historialDePago->fecha_pago = Input::get('fecha_pago');
        $historialDePago->monto_pago = Input::get('monto_pago');
        $historialDePago->save();
        return Redirect::to('historial_de_pagos')->with('notice', 'El historial de pago ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historialDePago = HistorialDePago::find($id);
        return View::make('historial_de_pagos.show')->with('historial_de_pago', $historialDePago);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historialDePago = HistorialDePago::find($id);
        return View::make('historial_de_pagos.save')->with('historial_de_pagos', $historialDePago);
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
        $historialDePago = HistorialDePago::find($id);
        $historialDePago->fecha_pago = Input::get('fecha_pago');
        $historialDePago->monto_pago = Input::get('monto_pago');
        $historialDePago->save();
        return Redirect::to('historial_de_pagos')->with('notice', 'El historial de pago ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historialDePago = HistorialDePago::find($id);
        $historialDePago->destroy($id);
        return Redirect::to('historial_de_pagos')->with('notice', 'El historial de pago ha sido eliminado correctamente.');
    }
}