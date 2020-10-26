<?php
namespace App\Http\Controllers;
use App\Coordinador;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
class CoordinadorController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/coordinadors/coordinadorHome';

    public function showLoginForm()
    {
        return view('coordinadors.coordinadorLogin');
    }

    public function guard(){
        return Auth::guard('coordinador');
    }

    public function secret(){
        return view('coordinadors.coordinadorHome');
    }

    public function detalle()
    {
        return view('coordinadors.coordinadorDetalle');
    }

    public function verMensajesEnviados($id){
        $mensajes = DB::table('mensaje_coordinadors')
            ->join('mensajes', 'mensajes.id', '=', 'mensaje_coordinadors.id_mensaje')
            ->where([
                ['mensaje_coordinadors.id_coordinador', '=', $id],
                ['mensaje_coordinadors.envia', '=', 1]
            ])
            ->get();
        return View::make('coordinadors.verMensajesEnviados')->with('mensajes', $mensajes);
    }

    public function verMensajesRecibidos($id){
        $mensajes = DB::table('mensaje_coordinadors')
            ->join('mensajes', 'mensajes.id', '=', 'mensaje_coordinadors.id_mensaje')
            ->where([
                ['mensaje_coordinadors.id_coordinador', '=', $id],
                ['mensaje_coordinadors.envia', '=', 0]
            ])
            ->get();
        return View::make('coordinadors.verMensajesRecibidos')->with('mensajes', $mensajes);
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

        return View::make('coordinadors.escribirMensaje')->with($data);
    }

    public static function enviarCorreo($id)
    {
        $coordinador = Coordinador::find($id);
        $nombre = $coordinador->nombre_coordinador;
        $email = $coordinador->email;
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

    // GET EN VISTA
    public function index()
    {
        $coordinador = Coordinador::all();
        return View::make('coordinadors.index')->with('coordinadors', $coordinador);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // POST EN POSTMAN
    public function create()
    {
        $coordinador = new Coordinador();
        return View::make('coordinadors.save')->with('coordinador', $coordinador);
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
        $coordinador =new Coordinador();
        $coordinador->nombre_coordinador = Input::get('nombre_coordinador');
        $coordinador->password = Input::get('password');
        $coordinador->fecha_nacimiento_coordinador = Input::get('fecha_nacimiento_coordinador');
        $coordinador->email = Input::get('email');
        $coordinador->telefono_coordinador = Input::get('telefono_coordinador');
        $coordinador->tipo_coordinador = 'Docente';
        $coordinador->id_direccion = 1;
        $coordinador->save();
        return Redirect::to('coordinadors')->with('notice', 'El coordinador ha sido creado correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function show($id)
    {
        $coordinador = Coordinador::find($id);
        return View::make('coordinadors.show')->with('coordinador', $coordinador);
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
        $coordinador = Coordinador::find($id);
        return View::make('coordinadors.save')->with('coordinador', $coordinador);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */

    // PUT EN POSTMAN
    public function update(Request $request, $id)
    {
        $coordinador = Coordinador::find($id);
        $coordinador->nombre_coordinador = Input::get('nombre_coordinador');
        $coordinador->password = Input::get('password');
        $coordinador->fecha_nacimiento_coordinador = Input::get('fecha_nacimiento_coordinador');
        $coordinador->email = Input::get('email');
        $coordinador->telefono_coordinador = Input::get('telefono_coordinador');
        $coordinador->tipo_coordinador = 'Docente';
        $coordinador->id_direccion = 1;
        $coordinador->save();
        return Redirect::to('coordinadors/coordinadorDetalle')->with('notice', 'El coordinador ha sido modificado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coordinador  $coordinador
     * @return \Illuminate\Http\Response
     */

    // DELETE EN POSTMAN
    public function destroy($id)
    {
        $coordinador = Coordinador::find($id);
        $coordinador->delete();
        return Redirect::to('coordinadors')->with('notice', 'El coordinador ha sido eliminado correctamente.'); 
    }

}
