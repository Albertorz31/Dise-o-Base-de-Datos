<?php
namespace App\Http\Controllers;
use App\SeccionEstudiante;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class SeccionEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccionEstudiante = SeccionEstudiante::all();
        return View::make('seccion_estudiantes.index')->with('seccion_estudiantes',$seccionEstudiante);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function buscarSeccion($id_seccion)
    {
    $seccionEstudiante = SeccionEstudiante::where('id_seccion', $id_seccion)->get();
    return View::make('seccion_estudiantes.index')->with('seccion_estudiantes', $seccionEstudiante);
    }

    public function buscarEstudiante($id_estudiante)
    {
    $seccionEstudiante = SeccionEstudiante::where('id_estudiante', $id_estudiante)->get();
    return View::make('seccion_estudiantes.index')->with('seccion_estudiantes', $seccionEstudiante);
    }

    public function create()
    {
        $seccionEstudiante = new SeccionEstudiante();
        return View::make('seccion_estudiantes.save')->with('seccion_estudiante',$seccionEstudiante);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seccionEstudiante = new SeccionEstudiante();
        $seccionEstudiante->id_estudiante = Input::get('id_estudiante');
        $seccionEstudiante->id_seccion = Input::get('id_seccion');
        $seccionEstudiante->semestre = Input::get('semestre');
        $seccionEstudiante->cursando = Input::get('cursando');
        $seccionEstudiante->aprobado = Input::get('aprobado');
        $seccionEstudiante->calificacion_catedra = Input::get('calificacion_catedra');
        $seccionEstudiante->calificacion_laboratorio = Input::get('calificacion_laboratorio');
        $seccionEstudiante->calificacion_final = Input::get('calificacion_final');
        $seccionEstudiante->save();
        return Redirect::to('seccion_estudiantes')->with('notice', 'La sección_estudiante ha sido creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seccionEstudiante = SeccionEstudiante::find($id);
        return View::make('seccion_estudiantes.show')->with('seccion_estudiante', $seccionEstudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $seccionEstudiante = SeccionEstudiante::find($id);
        return View::make('seccion_estudiantes.save')->with('seccion_estudiante', $seccionEstudiante);
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
        $seccionEstudiante = SeccionEstudiante::find($id);
        $seccionEstudiante->id_estudiante = Input::get('id_estudiante');
        $seccionEstudiante->id_seccion = Input::get('id_seccion');
        $seccionEstudiante->semestre = Input::get('semestre');
        $seccionEstudiante->cursando = Input::get('cursando');
        $seccionEstudiante->aprobado = Input::get('aprobado');
        $seccionEstudiante->calificacion_catedra = Input::get('calificacion_catedra');
        $seccionEstudiante->calificacion_laboratorio = Input::get('calificacion_laboratorio');
        $seccionEstudiante->calificacion_final = Input::get('calificacion_final');
        $seccionEstudiante->save();
        return Redirect::to('seccion_estudiantes')->with('notice', 'La sección_estudiante ha sido modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seccionEstudiante = SeccionEstudiante::find($id);
        $seccionEstudiante->delete();
        return Redirect::to('seccion_estudiantes')->with('notice', 'La sección_estudiante ha sido eliminada correctamente.');
    }
}
