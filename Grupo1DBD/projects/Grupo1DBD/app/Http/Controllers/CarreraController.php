<?php
namespace App\Http\Controllers;
use App\Carrera;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function index()
    {
        $carrera = Carrera::all();
        return View::make('carreras.index')->with('carreras', $carrera);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // POST EN POSTMAN
    public function create()
    {
        $carrera = new Carrera();
        return View::make('carreras.save')->with('carrera', $carrera);
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
        $carrera =new Carrera();
        $carrera->nombre_carrera = Input::get('nombre_carrera');
        $carrera->duracion_semestres = Input::get('duracion_semestres');
        $carrera->jornada = Input::get('jornada');
        $carrera->arancel = Input::get('arancel');
        $carrera->grado_academico = Input::get('grado_academico');
        $carrera->titulo_profesional = Input::get('titulo_profesional');
        $carrera->acreditacion = Input::get('acreditacion');
        $carrera->numero_estudiantes = Input::get('numero_estudiantes');
        $carrera->id_facultad = Input::get('id_facultad');
        $carrera->id_malla = Input::get('id_malla');
        $carrera->save();
        return Redirect::to('carreras')->with('notice', 'La carrera ha sido creada correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\carrera  $carrera
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function show($id)
    {
        $carrera = Carrera::find($id);
        return View::make('carreras.show')->with('carrera', $carrera);
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
        $carrera = Carrera::find($id);
        return View::make('carreras.save')->with('carrera', $carrera);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carrera  $carrera
     * @return \Illuminate\Http\Response
     */

    // PUT EN POSTMAN
    public function update(Request $request, $id)
    {
        $carrera = Carrera::find($id);
        $carrera->nombre_carrera = Input::get('nombre_carrera');
        $carrera->duracion_semestres = Input::get('duracion_semestres');
        $carrera->jornada = Input::get('jornada');
        $carrera->arancel = Input::get('arancel');
        $carrera->grado_academico = Input::get('grado_academico');
        $carrera->titulo_profesional = Input::get('titulo_profesional');
        $carrera->acreditacion = Input::get('acreditacion');
        $carrera->numero_estudiantes = Input::get('numero_estudiantes');
        $carrera->id_facultad = Input::get('id_facultad');
        $carrera->id_malla = Input::get('id_malla');
        $carrera->save();
        return Redirect::to('carreras')->with('notice', 'La carrera ha sido modificado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carrera  $carrera
     * @return \Illuminate\Http\Response
     */

    // DELETE EN POSTMAN
    public function destroy($id)
    {
        $carrera = Carrera::find($id);
        $carrera->delete();
        return Redirect::to('carreras')->with('notice', 'La carrera ha sido eliminada correctamente.'); 
    }

}