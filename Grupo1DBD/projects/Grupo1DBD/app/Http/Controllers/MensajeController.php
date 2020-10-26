<?php
namespace App\Http\Controllers;
use App\Mensaje;
use App\MensajeAdministrador;
use App\MensajeCoordinador;
use App\MensajeEstudiante;
use App\MensajeProfesor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class MensajeController extends Controller
{
    public function enviarMensajeEstudiante($id_estudiante, $destino, Request $request){
        $mensaje = new Mensaje();
        $mensaje->encabezado = $request->input('encabezado');
        $mensaje->texto = $request->input('texto');
        $mensaje->envia = 0;
        $mensaje->hora_envio = "";
        $fecha = Carbon::now();
        $mensaje->fecha_envio = $fecha->toDateTimeString();
        $mensaje->id_administrador = NULL;
        $mensaje->id_estudiante = NULL;
        $mensaje->id_coordinador = NULL;
        $mensaje->id_profesor = NULL;
        $mensaje->save();
        $mensaje_estudiante = new MensajeEstudiante();
        $mensaje_estudiante->id_mensaje = $mensaje->id;
        $mensaje_estudiante->id_estudiante = $id_estudiante;
        $mensaje_estudiante->envia = 1;
        $mensaje_estudiante->save();
        EstudianteController::enviarCorreo($id_estudiante);
        if ($destino == 0) { // Envia mensaje a estudiante
                $mensaje_estudiante = new MensajeEstudiante();
                $mensaje_estudiante->id_mensaje = $mensaje->id;
                $mensaje_estudiante->id_estudiante = $request->input('destinos');
                $mensaje_estudiante->envia = 0;
                $mensaje_estudiante->save();
                // Enviar correo electronico
                EstudianteController::enviarCorreo($request->input('destinos'));
        }
        elseif ($destino == 1) { // Envia mensaje a profesor
                $mensaje_profesor = new MensajeProfesor();
                $mensaje_profesor->id_mensaje = $mensaje->id;
                $mensaje_profesor->id_profesor = $request->input('destinos');
                $mensaje_profesor->envia = 0;
                $mensaje_profesor->save();
                // Enviar correo electronico
                ProfesorController::enviarCorreo($request->input('destinos'));

        }
        elseif ($destino == 2) { // Envia mensaje a coordinador
                $mensaje_coordinador = new MensajeCoordinador();
                $mensaje_coordinador->id_mensaje = $mensaje->id;
                $mensaje_coordinador->id_coordinador = $request->input('destinos');
                $mensaje_coordinador->envia = 0;
                $mensaje_coordinador->save();
                // Enviar correo electronico
                CoordinadorController::enviarCorreo($request->input('destinos'));
        }
        elseif ($destino == 3) { // Envia mensaje a administrador
                $mensaje_administrador = new MensajeAdministrador();
                $mensaje_administrador->id_mensaje = $mensaje->id;
                $mensaje_administrador->id_administrador = $request->input('destinos');
                $mensaje_administrador->envia = 0;
                $mensaje_administrador->save();
                // Enviar correo electronico
                AdministradorController::enviarCorreo($request->input('destinos'));
        }
        return redirect('estudiantes/estudianteHome');
    }



    public function enviarMensajeProfesor($id_profesor, $destino, Request $request){
        $mensaje = new Mensaje();
        $mensaje->encabezado = $request->input('encabezado');
        $mensaje->texto = $request->input('texto');
        $mensaje->envia = 0;
        $mensaje->hora_envio = "";
        $fecha = Carbon::now();
        $mensaje->fecha_envio = $fecha->toDateTimeString();
        $mensaje->id_administrador = NULL;
        $mensaje->id_estudiante = NULL;
        $mensaje->id_coordinador = NULL;
        $mensaje->id_profesor = NULL;
        $mensaje->save();
        $mensaje_estudiante = new MensajeProfesor();
        $mensaje_estudiante->id_mensaje = $mensaje->id;
        $mensaje_estudiante->id_profesor = $id_profesor;
        $mensaje_estudiante->envia = 1;
        $mensaje_estudiante->save();
        ProfesorController::enviarCorreo($id_profesor);
        if ($destino == 0) { // Envia mensaje a estudiante

                $mensaje_estudiante = new MensajeEstudiante();
                $mensaje_estudiante->id_mensaje = $mensaje->id;
                $mensaje_estudiante->id_estudiante = $request->input('destinos');
                $mensaje_estudiante->envia = 0;
                $mensaje_estudiante->save();
                // Enviar correo electronico
                EstudianteController::enviarCorreo($request->input('destinos'));

        }
        elseif ($destino == 1) { // Envia mensaje a profesor

                $mensaje_profesor = new MensajeProfesor();
                $mensaje_profesor->id_mensaje = $mensaje->id;
                $mensaje_profesor->id_profesor = $request->input('destinos');
                $mensaje_profesor->envia = 0;
                $mensaje_profesor->save();
                // Enviar correo electronico
                ProfesorController::enviarCorreo($request->input('destinos'));

        }
        elseif ($destino == 2) { // Envia mensaje a coordinador

                $mensaje_coordinador = new MensajeCoordinador();
                $mensaje_coordinador->id_mensaje = $mensaje->id;
                $mensaje_coordinador->id_coordinador = $request->input('destinos');
                $mensaje_coordinador->envia = 0;
                $mensaje_coordinador->save();
                // Enviar correo electronico
                CoordinadorController::enviarCorreo($request->input('destinos'));

        }
        elseif ($destino == 3) { // Envia mensaje a administrador

                $mensaje_administrador = new MensajeAdministrador();
                $mensaje_administrador->id_mensaje = $mensaje->id;
                $mensaje_administrador->id_administrador = $request->input('destinos');
                $mensaje_administrador->envia = 0;
                $mensaje_administrador->save();
                // Enviar correo electronico
                AdministradorController::enviarCorreo($request->input('destinos'));

        }
        return redirect('profesors/profesorHome');
    }

    public function enviarMensajeCoordinador($id_coordinador, $destino, Request $request){
        $mensaje = new Mensaje();
        $mensaje->encabezado = $request->input('encabezado');
        $mensaje->texto = $request->input('texto');
        $mensaje->envia = 0;
        $mensaje->hora_envio = "";
        $fecha = Carbon::now();
        $mensaje->fecha_envio = $fecha->toDateTimeString();
        $mensaje->id_administrador = NULL;
        $mensaje->id_estudiante = NULL;
        $mensaje->id_coordinador = NULL;
        $mensaje->id_profesor = NULL;
        $mensaje->save();
        $mensaje_estudiante = new MensajeCoordinador();
        $mensaje_estudiante->id_mensaje = $mensaje->id;
        $mensaje_estudiante->id_coordinador = $id_coordinador;
        $mensaje_estudiante->envia = 1;
        $mensaje_estudiante->save();
        CoordinadorController::enviarCorreo($id_coordinador);
        if ($destino == 0) { // Envia mensaje a estudiante

                $mensaje_estudiante = new MensajeEstudiante();
                $mensaje_estudiante->id_mensaje = $mensaje->id;
                $mensaje_estudiante->id_estudiante = $request->input('destinos');
                $mensaje_estudiante->envia = 0;
                $mensaje_estudiante->save();
                // Enviar correo electronico
                EstudianteController::enviarCorreo($request->input('destinos'));

        }
        elseif ($destino == 1) { // Envia mensaje a profesor

                $mensaje_profesor = new MensajeProfesor();
                $mensaje_profesor->id_mensaje = $mensaje->id;
                $mensaje_profesor->id_profesor = $request->input('destinos');
                $mensaje_profesor->envia = 0;
                $mensaje_profesor->save();
                // Enviar correo electronico
                ProfesorController::enviarCorreo($request->input('destinos'));

        }
        elseif ($destino == 2) { // Envia mensaje a coordinador

                $mensaje_coordinador = new MensajeCoordinador();
                $mensaje_coordinador->id_mensaje = $mensaje->id;
                $mensaje_coordinador->id_coordinador = $request->input('destinos');
                $mensaje_coordinador->envia = 0;
                $mensaje_coordinador->save();
                // Enviar correo electronico
                CoordinadorController::enviarCorreo($request->input('destinos'));

        }
        elseif ($destino == 3) { // Envia mensaje a administrador

                $mensaje_administrador = new MensajeAdministrador();
                $mensaje_administrador->id_mensaje = $mensaje->id;
                $mensaje_administrador->id_administrador = $request->input('destinos');
                $mensaje_administrador->envia = 0;
                $mensaje_administrador->save();
                // Enviar correo electronico
                AdministradorController::enviarCorreo($request->input('destinos'));

        }
        return redirect('coordinadors/coordinadorHome');
    }

    public function enviarMensajeAdministrador($id_admin, $destino, Request $request){
        $mensaje = new Mensaje();
        $mensaje->encabezado = $request->input('encabezado');
        $mensaje->texto = $request->input('texto');
        $mensaje->envia = 0;
        $mensaje->hora_envio = "";
        $fecha = Carbon::now();
        $mensaje->fecha_envio = $fecha->toDateTimeString();
        $mensaje->id_administrador = NULL;
        $mensaje->id_estudiante = NULL;
        $mensaje->id_coordinador = NULL;
        $mensaje->id_profesor = NULL;
        $mensaje->save();
        $mensaje_estudiante = new MensajeAdministrador();
        $mensaje_estudiante->id_mensaje = $mensaje->id;
        $mensaje_estudiante->id_administrador = $id_admin;
        $mensaje_estudiante->envia = 1;
        $mensaje_estudiante->save();
        EstudianteController::enviarCorreo($id_admin);
        $array_destino = explode(" ", $request->input('destinos'));
        if ($destino == 0) { // Envia mensaje a estudiante
            foreach ($array_destino as $id) {
                $mensaje_estudiante = new MensajeEstudiante();
                $mensaje_estudiante->id_mensaje = $mensaje->id;
                $mensaje_estudiante->id_estudiante = $id;
                $mensaje_estudiante->envia = 0;
                $mensaje_estudiante->save();
                // Enviar correo electronico
                EstudianteController::enviarCorreo($id);
            }
        }
        elseif ($destino == 1) { // Envia mensaje a profesor
            foreach ($array_destino as $id) {
                $mensaje_profesor = new MensajeProfesor();
                $mensaje_profesor->id_mensaje = $mensaje->id;
                $mensaje_profesor->id_profesor = $id;
                $mensaje_profesor->envia = 0;
                $mensaje_profesor->save();
                // Enviar correo electronico
                ProfesorController::enviarCorreo($id);
            }
        }
        elseif ($destino == 2) { // Envia mensaje a coordinador
            foreach ($array_destino as $id) {
                $mensaje_coordinador = new MensajeCoordinador();
                $mensaje_coordinador->id_mensaje = $mensaje->id;
                $mensaje_coordinador->id_coordinador = $id;
                $mensaje_coordinador->envia = 0;
                $mensaje_coordinador->save();
                // Enviar correo electronico
                CoordinadorController::enviarCorreo($id);
            }
        }
        elseif ($destino == 3) { // Envia mensaje a administrador
            foreach ($array_destino as $id) {
                $mensaje_administrador = new MensajeAdministrador();
                $mensaje_administrador->id_mensaje = $mensaje->id;
                $mensaje_administrador->id_administrador = $id;
                $mensaje_administrador->envia = 0;
                $mensaje_administrador->save();
                // Enviar correo electronico
                AdministradorController::enviarCorreo($id);
            }
        }
        return redirect('administradors/administradorHome');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function index()
    {
        $mensaje = Mensaje::all();
        return View::make('mensajes.index')->with('mensajes', $mensaje);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // POST EN POSTMAN
    public function create()
    {
        $mensaje = new Mensaje();
        return View::make('mensajes.save')->with('mensaje', $mensaje);
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
        $mensaje =new Mensaje();
        $mensaje->texto = Input::get('encabezado');
        $mensaje->texto = Input::get('texto');
        $mensaje->hora_envio = Input::get('hora_envio');
        $mensaje->fecha_envio = Input::get('fecha_envio');
        $mensaje->id_administrador = Input::get('id_administrador');
        $mensaje->id_estudiante = Input::get('id_estudiante');
        $mensaje->envia = Input::get('envia');
        $mensaje->id_coordinador = Input::get('id_coordinador');
        $mensaje->id_profesor = Input::get('id_profesor');
        $mensaje->save();
        return Redirect::to('mensajes')->with('notice', 'El mensaje ha sido creada correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */

    // GET EN POSTMAN
    public function show($id)
    {
        $mensaje = Mensaje::find($id);
        return View::make('mensajes.show')->with('mensaje', $mensaje);
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
        $mensaje = Mensaje::find($id);
        return View::make('mensajes.save')->with('mensaje', $mensaje);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */

    // PUT EN POSTMAN
    public function update(Request $request, $id)
    {
        $mensaje = Mensaje::find($id);
        $mensaje->correo_asociado = Input::get('encabezado');
        $mensaje->texto = Input::get('texto');
        $mensaje->hora_envio = Input::get('hora_envio');
        $mensaje->fecha_envio = Input::get('fecha_envio');
        $mensaje->id_administrador = Input::get('id_administrador');
        $mensaje->id_estudiante = Input::get('id_estudiante');
        $mensaje->envia = Input::get('envia');
        $mensaje->id_coordinador = Input::get('id_coordinador');
        $mensaje->id_profesor = Input::get('id_profesor');
        $mensaje->save();
        return Redirect::to('mensajes')->with('notice', 'El mensaje ha sido modificado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */

    // DELETE EN POSTMAN
    public function destroy($id)
    {
        $mensaje = Mensaje::find($id);
        $mensaje->delete();
        return Redirect::to('mensajes')->with('notice', 'El mensaje ha sido eliminada correctamente.'); 
    }

}
