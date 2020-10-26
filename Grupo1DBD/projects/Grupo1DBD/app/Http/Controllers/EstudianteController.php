<?php

namespace App\Http\Controllers;
use App\Estudiante;
use App\Pago;
use App\SeccionEstudiante;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class EstudianteController extends Controller
{
    
    use AuthenticatesUsers;

    protected $redirectTo = '/estudiantes/estudianteHome';

    public function showLoginForm()
    {
        return view('estudiantes.estudianteLogin');
    }

    public function guard()
    {
        return Auth::guard('estudiante');
    }

    public function secret()
    {
        return view('estudiantes.estudianteHome');
    }

    public function detalle()
    {
        return view('estudiantes.estudianteDetalle');
    }

    public function detalleCurricular()
    {
        return view('estudiantes.estudianteDetalleCurricular');
    }
    public static function mostrarMalla($estudiante)
    {
        $id_malla_carr = DB::table('carreras')->select('id_malla')->where('id', $estudiante->id_carrera)->get();
        $id_malla_carr = json_decode($id_malla_carr);
        $id_asignaturas = DB::table('malla_asignaturas')->select('id_asignatura')->where('id_malla', $id_malla_carr[0]->id_malla)->get();
        $id_asignaturas = json_decode($id_asignaturas);
        $array = array();
        foreach($id_asignaturas as $item){
            array_push($array, $item->id_asignatura);
        }
        $asignaturas = DB::table('asignaturas')->select('nombre_asignatura', 'nivel_asignatura')->whereIn('id', $array)->get();
        return $asignaturas;
    }


    public static function inscribir($id, $seccion)
    {
        $cantidad = DB::table('seccion_estudiantes')
            ->where([
                ['id_seccion', $id],
                ['id_estudiante', $seccion]
            ])->count();
        if($cantidad == 0) {
            $seccion_estudiante = new SeccionEstudiante();
            $seccion_estudiante->id_estudiante = $id;
            $seccion_estudiante->id_seccion = $seccion;
            $seccion_estudiante->semestre = 0;
            $seccion_estudiante->cursando = 0;
            $seccion_estudiante->aprobado = 0;
            $seccion_estudiante->calificacion_laboratorio = 0;
            $seccion_estudiante->calificacion_final = 0;
            $seccion_estudiante->calificacion_catedra = 0;
            $seccion_estudiante->save();
        }
        return redirect('estudiantes/estudianteHome');
    }

    public function vistaTomarRamos($id)
    {
        $estudiante = Estudiante::find($id);
        $seccion_horarios = DB::table('asignaturas')
            ->where('asignaturas.nivel_asignatura', '>=', $estudiante->nivel_estudiante)
            ->join('seccions', 'asignaturas.id', '=', 'seccions.id_asignatura')
            ->join('seccion_horarios', 'seccion_horarios.id_seccion', '=', 'seccions.id')
            ->join('horarios', 'horarios.id', '=', 'seccion_horarios.id_horario')
            ->select('asignaturas.nombre_asignatura', 'seccions.id')
            ->distinct()
            ->get();
        $recomendaciones = DB::table('asignaturas')
            ->where('asignaturas.nivel_asignatura', '>=', $estudiante->nivel_estudiante)
            ->join('seccions', 'asignaturas.id', '=', 'seccions.id_asignatura')
            ->join('seccion_horarios', 'seccion_horarios.id_seccion', '=', 'seccions.id')
            ->join('horarios', 'horarios.id', '=', 'seccion_horarios.id_horario')
            ->select('seccions.id', 'asignaturas.nombre_asignatura')
            ->distinct()
            ->limit(6)
            ->get();
        $data = array($seccion_horarios, $recomendaciones);
        return View::make('estudiantes.tomarRamos')->with('data', $data);
    }

    public function desinscribir($estudiante, $seccion) {
        $id = DB::table('seccion_estudiantes')
            ->where('id_estudiante', '=', $estudiante)
            ->where('id_seccion', '=', $seccion)
            ->get();
        $id = SeccionEstudiante::find($id[0]->id);
        $id->delete();
        return redirect('estudiantes/estudianteHome');
    }

    public function vistaBotarRamos($id)
    {
        $estudiante = Estudiante::find($id);
        $seccion_horarios = DB::table('seccion_estudiantes')
            ->join('seccions', 'seccion_estudiantes.id_seccion', '=', 'seccions.id')
            ->where('seccion_estudiantes.id_estudiante', $id)
            ->where('seccion_estudiantes.cursando', '=', 0)
            ->join('asignaturas', 'asignaturas.id', '=', 'seccions.id_asignatura')
            ->select('asignaturas.nombre_asignatura', 'seccions.id')
            ->get();
        return View::make('estudiantes.botarRamos')->with('seccion_horarios', $seccion_horarios);
    }
    public function vistaMalla(){
        return View::make('estudiantes.malla');
    }

    public function verMensajesEnviados($id){
        $mensajes = DB::table('mensaje_estudiantes')
            ->join('mensajes', 'mensajes.id', '=', 'mensaje_estudiantes.id_mensaje')
            ->where([
                ['mensaje_estudiantes.id_estudiante', '=', $id],
                ['mensaje_estudiantes.envia', '=', 1]
            ])
            ->get();
        return View::make('estudiantes.verMensajesEnviados')->with('mensajes', $mensajes);
    }

    public function verMensajesRecibidos($id){
        $mensajes = DB::table('mensaje_estudiantes')
            ->join('mensajes', 'mensajes.id', '=', 'mensaje_estudiantes.id_mensaje')
            ->where([
                ['mensaje_estudiantes.id_estudiante', '=', $id],
                ['mensaje_estudiantes.envia', '=', 0]
            ])
            ->get();
        return View::make('estudiantes.verMensajesRecibidos')->with('mensajes', $mensajes);
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

        return View::make('estudiantes.escribirMensaje')->with($data);
    }

    public static function enviarCorreo($id)
    {
        $estudiante = Estudiante::find($id);
        $nombre = $estudiante->nombre_estudiante;
        $email = $estudiante->email;
        $datos = array('nombre' => $nombre, 'body' => "Posees un nuevo mensaje");
        Mail::send('email.mail', $datos, function($mensaje) use ($nombre, $email){
            $mensaje->to($email, $nombre)->subject('Nuevo mensaje');
            $mensaje->from('proyectodbd2019@gmail.com', 'Servicio de mensajería');
        });
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

    public function verHorario($id) {
        $horarios = DB::table('seccion_estudiantes')
            ->join('seccions', 'seccion_estudiantes.id_seccion', '=', 'seccions.id')
            ->where('seccion_estudiantes.id_estudiante', $id)
            ->join('seccion_horarios', 'seccion_horarios.id_seccion', '=', 'seccions.id')
            ->join('horarios', 'horarios.id', '=', 'seccion_horarios.id_horario')
            ->where('seccion_estudiantes.cursando', '=', 0)
            ->join('asignaturas', 'asignaturas.id', '=', 'seccions.id_asignatura')
            ->select('asignaturas.nombre_asignatura', 'horarios.dia', 'horarios.modulo', 'seccion_horarios.sala')
            ->get();
        return View::make('estudiantes.estudianteHorario')->with('horarios', $horarios);
    }

    public function verCalificaciones($id){
        $calificaciones = DB::table('seccion_estudiantes')
            ->join('seccions', 'seccion_estudiantes.id_seccion', '=', 'seccions.id')
            ->where('seccion_estudiantes.id_estudiante', $id)
            ->join('seccion_profesors','seccion_profesors.id','=','seccions.id')
            ->join('profesors','profesors.id','=','seccion_profesors.id')
            ->where('seccion_estudiantes.cursando','=', 1)
            ->join('asignaturas','asignaturas.id','=','seccions.id_asignatura')
            ->select('asignaturas.nombre_asignatura','seccion_estudiantes.calificacion_catedra','seccion_estudiantes.calificacion_laboratorio','seccion_estudiantes.calificacion_final','seccion_estudiantes.semestre','profesors.nombre_profesor','seccion_estudiantes.aprobado','asignaturas.nivel_asignatura')
            ->get();
        return View::make('estudiantes.estudianteCalificaciones')->with('calificaciones',$calificaciones);
    }

    public function verPago($id){
        $pago = DB::table('estudiantes')
            ->join('pagos','pagos.id_estudiante','=','estudiantes.id')
            ->where('estudiantes.id', $id)
            ->select('pagos.tipo_pago','pagos.pagado','pagos.num_cuenta','estudiantes.matricula','estudiantes.id')
            ->get();
        return View::make('estudiantes.estudiantePago')->with('pago',$pago);
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
        $estudiante = Estudiante::all();
        return View::make('estudiantes.index')->with('estudiantes', $estudiante);
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
        $estudiante = new Estudiante();
        return View::make('estudiantes.save')->with('estudiante', $estudiante);
    }

    public function crearPago($id_estudiante,$matricula)
    {
        $pago1 = new Pago();

        $pago = array($id_estudiante,$matricula,$pago1);

        return View::make('estudiantes.estudianteNuevoPago')->with('pago', $pago);
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
        $estudiante =new Estudiante();
        $estudiante->nombre_estudiante = Input::get('nombre_estudiante');
        $estudiante->password= Input::get('password');
        $estudiante->fecha_nacimiento_estudiante = Input::get('fecha_nacimiento_estudiante');
        $estudiante->email = Input::get('email');
        $estudiante->telefono_estudiante = Input::get('telefono_estudiante');
        $estudiante->asignaturas_aprobadas= 12;
        $estudiante->situacion_estudiante = 'regular';
        $estudiante->nivel_estudiante = 4;
        $estudiante->fecha_ingreso = '2001-01-15';
        $estudiante->matricula= 0;
        $estudiante->id_direccion = 1;
        $estudiante->id_carrera = 1;
        $estudiante->save();
        return Redirect::to('estudiantes')->with('notice', 'El estudiante ha sido creado correctamente.');
    }

    public function storePago(Request $request,$id)
    {
        $pago = new Pago();
        $pago->tipo_pago = Input::get('tipo_pago');
        $pago->num_cuenta = Input::get('num_cuenta');
        $pago->pagado = Input::get('pagado');
        $pago->id_estudiante = $id;
        $pago->save();
        return Redirect::to('estudiantes.estudiantePago')->with('notice','El pagado se ha realizado correctmente');
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
        $estudiante = Estudiante::find($id);
        return View::make('estudiantes.show')->with('estudiante', $estudiante);
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
        $estudiante = Estudiante::find($id);
        return View::make('estudiantes.save')->with('estudiante', $estudiante);
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
        $estudiante = Estudiante::find($id);
        $estudiante->nombre_estudiante = Input::get('nombre_estudiante');
        $estudiante->password= Input::get('password');
        $estudiante->fecha_nacimiento_estudiante = Input::get('fecha_nacimiento_estudiante');
        $estudiante->email = Input::get('email');
        $estudiante->telefono_estudiante = Input::get('telefono_estudiante');
        $estudiante->asignaturas_aprobadas= 12;
        $estudiante->situacion_estudiante = 'regular';
        $estudiante->nivel_estudiante = 4;
        $estudiante->fecha_ingreso = '2001-01-15';
        $estudiante->matricula= 0;
        $estudiante->id_direccion = 1;
        $estudiante->id_carrera = 1;
        $estudiante->save();
        return Redirect::to('estudiantes/estudianteDetalle')->with('notice', 'El estudiante ha sido modificado correctamente.');
    }

    public function updatePago(Request $request, $id)
    {
       $pago = Pago::find($id);
       $pago->tipo_pago = Input::get('tipo_pago');
       $pago->num_cuenta = Input::get('num_cuenta');
       $pago->pagado = Input::get('pagado');
       $pago->id_estudiante = $id;
       $pago->save();
       return Redirect::to('estudiantes.estudiantePago')->with('notice','El pagado se ha realizado correctmente');
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
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return Redirect::to('estudiantes')->with('notice', 'El estudiante ha sido eliminado correctamente.');
    }
}
