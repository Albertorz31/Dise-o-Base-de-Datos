<?php

namespace App\Http\Controllers;
use App\PagoArancel;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PagoArancelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagoArancel = PagoArancel::all();
        return View::make('pago_arancels.index')->with('pago_arancels', $pagoArancel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagoArancel = new PagoArancel();
        return View::make('pago_arancels.save')->with('pago_arancel', $pagoArancel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pagoArancel =new PagoArancel();
        $pagoArancel->id_pago = Input::get('id_pago');
        $pagoArancel->id_arancel = Input::get('id_arancel');
        $pagoArancel->fecha = Input::get('fecha');
        $pagoArancel->save();
        return Redirect::to('pago_arancels')->with('notice', 'El Pago_Arancel ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagoArancel = PagoArancel::find($id);
        return View::make('pago_arancels.show')->with('pago_arancel', $pagoArancel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagoArancel = PagoArancel::find($id);
        return View::make('pago_arancels.save')->with('pago_arancel', $pagoArancel);
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
        $pagoArancel = PagoArancel::find($id);
        $pagoArancel->id_pago = Input::get('id_pago');
        $pagoArancel->id_arancel = Input::get('id_arancel');
        $pagoArancel->fecha = Input::get('fecha');
        $pagoArancel->save();
        return Redirect::to('pago_arancels')->with('notice', 'El Pago_Arancel ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagoArancel = PagoArancel::find($id);
        $pagoArancel->delete();
        return Redirect::to('pago_arancels')->with('notice', 'El Pago_Arancel ha sido eliminado correctamente.'); 
    }
}
