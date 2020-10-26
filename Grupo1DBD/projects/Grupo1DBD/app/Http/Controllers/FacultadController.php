<?php
namespace App\Http\Controllers;
use App\Facultad;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Get
    public function index()
    {
        $facultad = Facultad::all();
        return View::make('facultads.index')->with('facultads',$facultad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //post
    public function create()
    {
        $facultad = new Facultad();
        return View::make('facultads.save')->with('facultad',$facultad);
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
        $facultad = new Facultad();
        $facultad->nombre_facultad = Input::get('nombre_facultad');
        $facultad->numero_carreras = Input::get('numero_carreras');
        $facultad->numero_estudiantes = Input::get('numero_estudiantes');
        $facultad->save();
        return  Redirect::to('facultads')->with('notice','La facultad ha sido creada correctamente');
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
        $facultad = Facultad::find($id);
        return View::make('facultads.show')->with('facultad',$facultad);
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
        $facultad = Facultad::find($id);
        return View::make('facultads.save')->with('facultad',$facultad);
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
        $facultad = Facultad::find($id);
        $facultad->nombre_facultad = Input::get('nombre_facultad');
        $facultad->numero_carreras = Input::get('numero_carreras');
        $facultad->numero_estudiantes = Input::get('numero_estudiantes');
        $facultad->save();
        return  Redirect::to('facultads')->with('notice','La facultad ha sido modificada correctamente'); 
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
        $facultad = Facultad::find($id);
        $facultad->delete();
        return Redirect::to('facultads')->with('notice','La facultad ha sido eliminada correctamente.');
    }
}
