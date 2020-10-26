<?php
namespace App\Http\Controllers;
use App\Administrador;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
class AdministradorController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/administradors/adminHome';
    public function showLoginForm()
    {
        return view('administradors.adminLogin');
    }
    public function guard()
    {
        return Auth::guard('admin');
    }
    public function secret()
    {
        return view('administradors.adminHome');
    }
    public function detalle()
    {
        return view('administradors.administradorDetalle');
    }
    public static function enviarCorreo($administrador)
    {
        $nombre = $administrador->nombre_administrador;
        $email = $administrador->email;
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
        $administrador = Administrador::all();
        return View::make('administradors.index')->with('administradors', $administrador);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // POST EN POSTMAN
    public function create()
    {
        $administrador = new Administrador();
        return View::make('administradors.save')->with('administrador', $administrador);
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
        $administrador =new Administrador();
        $administrador->nombre_administrador = Input::get('nombre_administrador');
        $administrador->password = Input::get('password');
        $administrador->fecha_nacimiento_administrador = Input::get('fecha_nacimiento_administrador');
        $administrador->email = Input::get('email');
        $administrador->telefono_adminstrador = Input::get('telefono_adminstrador');
        $administrador->id_direccion = Input::get('id_direccion');
        $administrador->save();
        return Redirect::to('administradors')->with('notice', 'El administrador ha sido creado correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // GET EN POSTMAN
    public function show($id)
    {
        $administrador = Administrador::find($id);
        return View::make('administradors.show')->with('administrador', $administrador);
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
        $administrador = Administrador::find($id);
        return View::make('administradors.save')->with('administrador', $administrador);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // PUT EN POSTMAN
    public function update(Request $request, $id)
    {
        $administrador = Administrador::find($id);
        $administrador->nombre_administrador = Input::get('nombre_administrador');
        $administrador->password = Input::get('password');
        $administrador->fecha_nacimiento_administrador = Input::get('fecha_nacimiento_administrador');
        $administrador->email = Input::get('email');
        $administrador->telefono_adminstrador = Input::get('telefono_adminstrador');
        $administrador->id_direccion = Input::get('id_direccion');
        $administrador->save();
        return Redirect::to('administradors/administradorDetalle')->with('notice', 'El administrador ha sido modificado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    // DELETE EN POSTMAN
    public function destroy($id)
    {
        $administrador = Administrador::find($id);
        $administrador->delete();
        return Redirect::to('administradors')->with('notice', 'El administrador ha sido eliminado correctamente.');
    }
}
