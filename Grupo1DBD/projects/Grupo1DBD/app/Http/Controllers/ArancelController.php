<?php

namespace App\Http\Controllers;

use App\Arancel;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ArancelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arancel = Arancel::all();
        return View::make('arancels.index')->with('arancels', $arancel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arancel = new Arancel();
        return View::make('arancels.save')->with('arancel', $arancel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arancel = new Arancel();
        $arancel->semestre_arancel = Input::get('semestre_arancel');
        $arancel->monto_arancel = Input::get('monto_arancel');
        $arancel->fecha_vencimiento_arancel = Input::get('fecha_vencimiento_arancel');
        $arancel->id_pago = Input::get('id_pago');
        $arancel->id_historial_de_pago = Input::get('id_historial_de_pago');
        $arancel->save();
        return Redirect::to('arancels')->with('notice', 'El arancel ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arancel = Arancel::find($id);
        return View::make('arancels.show')->with('arancel', $arancel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arancel = Arancel::find($id);
        return View::make('arancels.save')->with('arancel', $arancel);
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
        $arancel = Arancel::find($id);
        $arancel->semestre_arancel = Input::get('semestre_arancel');
        $arancel->monto_arancel = Input::get('monto_arancel');
        $arancel->fecha_vencimiento_arancel = Input::get('fecha_vencimiento_arancel');
        $arancel->id_pago = Input::get('id_pago');
        $arancel->id_historial_de_pago = Input::get('id_historial_de_pago');
        $arancel->save();
        return Redirect::to('arancels')->with('notice', 'El arancel ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arancel = Arancel::find($id);
        $arancel->destroy($id);
        return Redirect::to('arancels')->with('notice', 'El arancel ha sido eliminado correctamente.');
    }
}
