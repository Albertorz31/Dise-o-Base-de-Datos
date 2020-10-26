<?php
namespace App\Http\Controllers;
use App\Direccion;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function index()
    {
        $direccion = Direccion::all();
        return View::make('direccions.index')->with('direccions', $direccion);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // POST EN POSTMAN
    public function create()
    {
        $direccion = new Direccion();
        return View::make('direccions.save')->with('direccion', $direccion);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // POST EN POSTMAN
    public function store(Request $request)
    {
        $direccion =new Direccion();
        $direccion->comuna_direccion = Input::get('comuna_direccion');
        $direccion->calle_direccion = Input::get('calle_direccion');
        $direccion->nombre_direccion = Input::get('nombre_direccion');
        $direccion->numero_direccion = Input::get('numero_direccion');
        $direccion->region = Input::get('region');
        $direccion->pais = Input::get('pais');
        $direccion->save();
        return Redirect::to('direccions')->with('notice', 'El direccion ha sido creada correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function show($id)
    {
        $direccion = Direccion::find($id);
        return View::make('direccions.show')->with('direccion', $direccion);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // PUT EN POSTMAN
    public function edit($id)
    {
        $direccion = Direccion::find($id);
        return View::make('direccions.save')->with('direccion', $direccion);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */

    // PUT EN POSTMAN
    public function update(Request $request, $id)
    {
        $direccion = Direccion::find($id);
        $direccion->comuna_direccion = Input::get('comuna_direccion');
        $direccion->calle_direccion = Input::get('calle_direccion');
        $direccion->nombre_direccion = Input::get('nombre_direccion');
        $direccion->numero_direccion = Input::get('numero_direccion');
        $direccion->region = Input::get('region');
        $direccion->pais = Input::get('pais');
        $direccion->save();
        return Redirect::to('direccions')->with('notice', 'El direccion ha sido modificado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */

    // DELETE EN POSTMAN
    public function destroy($id)
    {
        $direccion = Direccion::find($id);
        $direccion->delete();
        return Redirect::to('direccions')->with('notice', 'El direccion ha sido eliminada correctamente.'); 
    }

}