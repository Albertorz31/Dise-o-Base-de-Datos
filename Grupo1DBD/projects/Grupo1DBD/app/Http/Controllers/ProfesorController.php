<?php

namespace App\Http\Controllers;
use App\Notifications\Correo;
use App\Profesor;
use App\SeccionProfesor;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ProfesorController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/profesors/profesorHome';

    public function showLoginForm()
    {
        return view('profesors.profesorLogin');
    }

    public function guard()
    {
        return Auth::guard('profesor');
    }

    public function secret()
    {
        return view('profesors.profesorHome');
    }

    public function verMensajesEnviados($id){
        $mensajes = DB::table('mensaje_profesors')
            ->join('mensajes', 'mensajes.id', '=', 'mensaje_profesors.id_mensaje')
            ->where([
                ['mensaje_profesors.id_profesor', '=', $id],
                ['mensaje_profesors.envia', '=', 1]
            ])
            ->get();
        return View::make('profesors.verMensajesEnviados')->with('mensajes', $mensajes);
    }

    public function verMensajesRecibidos($id){
        $mensajes = DB::table('mensaje_profesors')
            ->join('mensajes', 'mensajes.id', '=', 'mensaje_profesors.id_mensaje')
            ->where([
                ['mensaje_profesors.id_profesor', '=', $id],
                ['mensaje_profesors.envia', '=', 0]
            ])
            ->get();
        return View::make('profesors.verMensajesRecibidos')->with('mensajes', $mensajes);
    }

    public function verMensajeEscribir($id, $destino) {
        if ($destino == 0) {
            $destinos = DB::table('estudiantes')->pluck('nombre_estudiante', 'id');
        }
        elseif ($destino == 1) {
            $destinos = DB::table('profesors')->pluck('nombre_profesor', 'id');
        }
        elseif ($destino == 2) {
            $destinos = DB::table('coordinadors')->pluck('nombre_coordinador', 'id');
        }
        else{
            $destinos = DB::table('administradors')->pluck('nombre_administrador', 'id');
        }
        $encabezado = NULL;
        $texto = NULL;
        $data = array('id' => $id, 'destino' => $destino, 'destinos' => $destinos, 'encabezado' => $encabezado, 'texto' => $texto);

        return View::make('profesors.escribirMensaje')->with($data);
    }

    public static function enviarCorreo($id)
    {
        $profesor = Profesor::find($id);
        $nombre = $profesor->nombre_profesor;
        $email = $profesor->email;
        $datos = array('nombre' => $nombre, 'body' => "Posees un nuevo mensaje");
        Mail::send('email.mail', $datos, function($mensaje) use ($nombre, $email){
            $mensaje->to($email, $nombre)->subject('Nuevo mensaje');
            $mensaje->from('proyectodbd2019@gmail.com', 'Servicio de mensajería');
        });
    }

    public function detalle()
    {
        return view('profesors.profesorDetalle');
    }
    
    public function obtenerDireccion($id)
    {
        $direcciones = DB::table('direccions')->get();

    }

    protected function downloadFile($src){
        if(is_file($src)){
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $content_type = finfo_file($finfo, $src);
            finfo_close($finfo);
            $file_name = basename($src).PHP_EOL;
            $size = filesize($src);
            header("Content_Type: $content_type");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: $size");
            readfile($src);
            return true;
        }else{
            return false;
        }
    }

    public function verHorario($id){
        $horarios = DB::table('seccion_profesors')
            ->join('seccions','seccion_profesors.id_seccion','=','seccions.id')
            ->where('seccion_profesors.id_profesor', $id)
            ->join('seccion_horarios','seccion_horarios.id_seccion','=','seccions.id')
            ->join('horarios','horarios.id','=','seccion_horarios.id_horario')
            ->join('seccion_estudiantes','seccion_estudiantes.id_seccion','=', 'seccions.id')
            ->where('seccion_estudiantes.cursando','=',0)
            ->join('asignaturas','asignaturas.id','=','seccions.id_asignatura')
            ->select('asignaturas.nombre_asignatura','horarios.dia','horarios.modulo','seccion_horarios.sala')
            ->get();
        return View::make('profesors.profesorHorario')->with('horarios',$horarios);
    }

    public function verCursos($id){
        $cursos = DB::table('seccion_profesors')
            ->join('seccions','seccion_profesors.id_seccion','=','seccions.id')
            ->where('seccion_profesors.id_profesor',$id)
            ->join('seccion_estudiantes','seccion_estudiantes.id_seccion','=', 'seccions.id')
            ->where('seccion_estudiantes.cursando','=',0)
            ->join('asignaturas','asignaturas.id','=','seccions.id_asignatura')
            ->select('asignaturas.nombre_asignatura','seccions.tipo_seccion','seccion_profesors.id_profesor')
            ->get();
        return View::make('profesors.profesorCursos')->with('cursos',$cursos);
    }

    public function verAlumnos($id){
        $alumnos = DB::table('seccion_profesors')
            ->join('seccions', 'seccion_profesors.id_seccion', '=', 'seccions.id')
            ->where('seccion_profesors.id_profesor', $id)
            ->join('seccion_estudiantes','seccion_estudiantes.id_seccion','=','seccions.id')
            ->join('estudiantes','estudiantes.id','=','seccion_estudiantes.id_estudiante')
            ->join('carreras','carreras.id','=','estudiantes.id_carrera')
            ->where('seccion_estudiantes.cursando','=',0)
            ->select('estudiantes.nombre_estudiante','estudiantes.email','carreras.nombre_carrera','seccion_profesors.id_profesor')
            ->get();
        return View::make('profesors.profesorAlumnos')->with('alumnos',$alumnos);
    }

    public function verAlumnosAgain($id){
        $alumnos = DB::table('seccion_profesors')
            ->join('seccions', 'seccion_profesors.id_seccion', '=', 'seccions.id')
            ->where('seccion_profesors.id_profesor', $id)
            ->join('seccion_estudiantes','seccion_estudiantes.id_seccion','=','seccions.id')
            ->join('estudiantes','estudiantes.id','=','seccion_estudiantes.id_estudiante')
            ->join('carreras','carreras.id','=','estudiantes.id_carrera')
            ->where('seccion_estudiantes.cursando','=',0)
            ->select('estudiantes.nombre_estudiante','estudiantes.email','carreras.nombre_carrera','seccion_profesors.id_profesor')
            ->get();
        return View::make('profesors.profesorAlumnosA')->with('alumnos',$alumnos);
    }

    public function ponerNotas($id){
        $profesor = Profesor::find($id);
        $id = $profesor->id;
        $profe = $id;
        return View::make('profesors.profesorNotas')->with('profesor',$profesor);
    }

    public function download($item){
        if(!$this->downloadFile(app_path().'/files/' .$item)){
            return redirect()->back();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //get
    public function index()
    {
        //
        $profesor = Profesor::all();
        return View::make('profesors.index')->with('profesors', $profesor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //post
    public function create()
    {
        //
        $profesor = new Profesor();
        return View::make('profesors.save')->with('profesor', $profesor);
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
        //
        $profesor =new Profesor();
        $profesor->nombre_profesor = Input::get('nombre_profesor');
        $profesor->password = Input::get('password');
        $profesor->fecha_nacimiento_profesor = Input::get('fecha_nacimiento_profesor');
        $profesor->email = Input::get('email');
        $profesor->telefono_profesor = Input::get('telefono_profesor');
        $profesor->asignaturas_impartidas = 13;
        $profesor->especialidad_profesor = 'Ingerniero informatico';
        $profesor->id_direccion = 1;
        $profesor->save();
        return Redirect::to('profesors')->with('notice', 'El profesor ha sido creado correctamente.');
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
        //
        $profesor = Profesor::find($id);
        return View::make('profesors.show')->with('profesor', $profesor);
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
        //
        $profesor = Profesor::find($id);
        return View::make('profesors.save')->with('profesor', $profesor);
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
        //
        $profesor = Profesor::find($id);
        $profesor->nombre_profesor = Input::get('nombre_profesor');
        $profesor->password = Input::get('password');
        $profesor->fecha_nacimiento_profesor = Input::get('fecha_nacimiento_profesor');
        $profesor->email = Input::get('email');
        $profesor->telefono_profesor = Input::get('telefono_profesor');
        $profesor->asignaturas_impartidas = 13;
        $profesor->especialidad_profesor = 'Ingerniero informatico';
        $profesor->id_direccion = 1;
        $profesor->save();
        return Redirect::to('profesors/profesorDetalle')->with('notice', 'El profesor ha sido modificado correctamente.');

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
        //
        $profesor = Profesor::find($id);
        $profesor->delete();
        return Redirect::to('profesors')->with('notice', 'El profesor ha sido eliminado correctamente.');
    }
}
