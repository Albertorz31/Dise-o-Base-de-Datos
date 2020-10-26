<?php
namespace App\Http\Controllers;
use App\Malla;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class MallaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function index()
    {
        $malla = Malla::all();
        return View::make('mallas.index')->with('mallas', $malla);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // POST EN POSTMAN
    public function create()
    {
        $malla = new Malla();
        return View::make('mallas.save')->with('malla', $malla);
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
        $malla =new Malla();
        $malla->total_asignaturas = Input::get('total_asignaturas');
        $malla->cantidad_semestres = Input::get('cantidad_semestres');
        $malla->save();
        return Redirect::to('mallas')->with('notice', 'La malla ha sido creado correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\malla  $malla
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function show($id)
    {
        $malla = Malla::find($id);
        return View::make('mallas.show')->with('malla', $malla);
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
        $malla = Malla::find($id);
        return View::make('mallas.save')->with('malla', $malla);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\malla  $malla
     * @return \Illuminate\Http\Response
     */

    // PUT EN POSTMAN
    public function update(Request $request, $id)
    {
        $malla = Malla::find($id);
        $malla->total_asignaturas = Input::get('total_asignaturas');
        $malla->cantidad_semestres = Input::get('cantidad_semestres');
        $malla->save();
        return Redirect::to('mallas')->with('notice', 'La malla ha sido modificado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\malla  $malla
     * @return \Illuminate\Http\Response
     */

    // DELETE EN POSTMAN
    public function destroy($id)
    {
        $malla = Malla::find($id);
        $malla->delete();
        return Redirect::to('mallas')->with('notice', 'La malla ha sido eliminado correctamente.'); 
    }

}