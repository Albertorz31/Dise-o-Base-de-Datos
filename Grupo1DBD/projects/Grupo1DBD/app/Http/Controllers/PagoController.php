<?php

namespace App\Http\Controllers;

use App\Pago;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pago = Pago::all();
        return View::make('pagos.index')->with('pagos', $pago);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $pago = new Pago();
        return View::make('pagos.save')->with('pago', $pago);
    }

    public static function mostrarEstudiante($id_estudiante)
    {
        $pago = Pago::where('id_estudiante', $id_estudiante)->get();
        return View::make('pagos.index')->with('pagos', $pago);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $pago = new Pago();
        $pago->tipo_pago = Input::get('tipo_pago');
        $pago->num_cuenta = rand(100000,500000);
        $pago->pagado = Input::get('pagado');
        $pago->id_estudiante = 1;
        $pago->save();
        return Redirect::to('pagos')->with('notice', 'El pago ha sido realizado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $pago = Pago::find($id);
        return View::make('pagos.show')->with('pago', $pago);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $pago = Pago::find($id);
        return View::make('pagos.save')->with('pago', $pago);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $pago = Pago::find($id);
        $pago->tipo_pago = Input::get('tipo_pago');
        $pago->num_cuenta = rand(100000,500000);
        $pago->pagado = Input::get('pagado');
        $pago->id_estudiante = 1;
        $pago->save();
        return Redirect::to('pagos')->with('notice', 'El pago ha sido realizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $pago = Pago::find($id);
        $pago->destroy($id);
        return Redirect::to('pagos')->with('notice', 'El pago ha sido eliminado correctamente.');
    }
}