<?php
namespace App\Http\Controllers;
use App\Seccion;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //get
    public function index()
    {
        $seccion = Seccion::all();
        return View::make('seccions.index')->with('seccions',$seccion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //get

    public function buscarHorario($id_horario)
    {
    $seccion = Seccion::where('id_horario', $id_horario)->get();
    return View::make('seccions.index')->with('seccions', $seccion);
    }

    public function buscarAsignatura($id_asignatura)
    {
    $seccion = Seccion::where('id_asignatura', $id_asignatura)->get();
    return View::make('seccions.index')->with('seccions', $seccion);
    }

    public function create()
    {
        $seccion = new Seccion();
        return View::make('seccions.save')->with('seccion',$seccion);
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
        $seccion = new Seccion();
        $seccion->tipo_seccion = Input::get('tipo_seccion');
        $seccion->sala = Input::get('sala');
        $seccion->modulo = Input::get('modulo');
        $seccion->id_asignatura = Input::get('id_asignatura');
        $seccion->id_horario = Input::get('id_horario');
        $seccion->save();
        return Redirect::to('seccions')->with('notice', 'La sección ha sido creada correctamente.');
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
        $seccion = Seccion::find($id);
        return View::make('seccions.show')->with('seccion', $seccion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //get
    public function edit($id)
    {
        $seccion = Seccion::find($id);
        return View::make('seccions.save')->with('seccion', $seccion);
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
        $seccion = Seccion::find($id);
        $seccion->tipo_seccion = Input::get('tipo_seccion');
        $seccion->sala = Input::get('sala');
        $seccion->modulo = Input::get('modulo');
        $seccion->id_asignatura = Input::get('id_asignatura');
        $seccion->id_horario = Input::get('id_horario');
        $seccion->save();
        return Redirect::to('seccions')->with('notice', 'La sección ha sido modificada correctamente.');
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
        $seccion = Seccion::find($id);
        $seccion->delete();
        return Redirect::to('seccions')->with('notice', 'La sección ha sido eliminada correctamente.');
    }
}
