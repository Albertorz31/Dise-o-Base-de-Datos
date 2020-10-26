<?php
namespace App\Http\Controllers;
use App\Asignatura;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //get
    public function index()
    {
        $asignatura = Asignatura::all();
        return View::make('asignaturas.index')->with('asignaturas',$asignatura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //post
    public function create()
    {
        $asignatura = new Asignatura();
        return View::make('asignaturas.save')->with('asignatura',$asignatura);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //post

    public function buscarMalla($id_malla)
    {
    $asignatura = Asignatura::where('id_malla', $id_malla)->get();
    return View::make('asignaturas.index')->with('asignaturas', $asignatura);
    }

    public function store(Request $request)
    {
        $asignatura = new Asignatura();
        $asignatura->nombre_asignatura = Input::get('nombre_asignatura');
        $asignatura->nivel_asignatura = Input::get('nivel_asignatura');
        $asignatura->id_malla = Input::get('id_malla');
        $asignatura->save();
        return Redirect::to('asignaturas')->with('notice', 'La asignatura ha sido creada correctamente.');
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
        $asignatura = Asignatura::find($id);
        return View::make('asignaturas.show')->with('asignatura', $asignatura);
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
        $asignatura = Asignatura::find($id);
        return View::make('asignaturas.save')->with('asignatura', $asignatura);
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
        $asignatura = Asignatura::find($id);
        $asignatura->nombre_asignatura = Input::get('nombre_asignatura');
        $asignatura->nivel_asignatura = Input::get('nivel_asignatura');
        $asignatura->id_malla = Input::get('id_malla');
        $asignatura->save();
        return Redirect::to('asignaturas')->with('notice', 'La asignatura ha sido modificada correctamente.');
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
        $asignatura = Asignatura::find($id);
        $asignatura->delete();
        return Redirect::to('asignaturas')->with('notice', 'La asignatura ha sido eliminada correctamente.');
    }
}
