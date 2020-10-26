<?php

namespace App\Http\Controllers;
use App\Documento;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // get
    public function index()
    {
        $documento = Documento::all();
        return View::make('documentos.index')->with('documentos', $documento);
    }

    public function indexCoordinador()
    {
        $documento = Documento::all();
        return View::make('coordinadors.coordinadorDocuments')->with('documentos', $documento);
    }

    public function indexProfesor()
    {
        $documento = Documento::all();
        return View::make('profesors.profesorDocuments')->with('documentos',$documento);
    }

        public function getSimple()
    {
        return View::make('documentos.save')->with('estado',false);
    }
    
    public function postSimple()
    {
        //obtendremos el campo
        $file = Input::file('file');
        $url_image = Hash::make($file->getClientOriginalName());
        $destinoPath = app_path().'/files/';
        $subir=$file->move($destinoPath,$url_image.'.'.$file->guessExtension());
        return View::make('documentos')->with('notice','El documento se subió correctamente');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //post 
    public function create()
    {
        $documento = new Documento();
        return View::make('documentos.save')->with('documento', $documento);
    }

     public function createCoordinador()
    {
        $documento = new Documento();
        return View::make('coordinadors.coordinadorSave')->with('documento', $documento);
    }

    public function createProfesor()
    {
        $documento = new Documento();
        return View::make('profesors.profesorSave')->with('documento', $documento);
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
        $documento = new Documento();
        $documento->nombre_documento = Input::get('nombre_documento');
        $documento->contenido = Input::get('contenido');
        $documento->fecha = Input::get('fecha');
        $documento->id_seccion = Input::get('id_seccion');
        $documento->save();
        return Redirect::to('documentos')->with('notice','El documento ha sido creado correctamente. ');
    }

    public function storeCoordinador(Request $request)
    {
        $documento = new Documento();
        $documento->nombre_documento = Input::get('nombre_documento');
        $documento->contenido = Input::get('contenido');
        $documento->fecha = Input::get('fecha');
        $documento->id_seccion = Input::get('id_seccion');
        $documento->save();
        return Redirect::to('coordinadors.coordinadorDocuments')->with('notice','El documento ha sido creado correctamente. ');
    }

    public function storeProfesor(Request $request)
    {
        $documento = new Documento();
        $documento->nombre_documento = Input::get('nombre_documento');
        $documento->contenido = Input::get('contenido');
        $documento->fecha = Input::get('fecha');
        $documento->id_seccion = Input::get('id_seccion');
        $documento->save();
        return Redirect::to('profesors.profesorDocuments')->with('notice','El documento ha sido creado correctamente. ');
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
        $documento = Documento::find($id);
        return View::make('documentos.show')->with('documento',$documento);
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
        $documento = Documento::find($id);
        return View::make('documentos.save')->with('documento',$documento);
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
        $documento = Documento::find($id);
        $documento->nombre_documento = Input::get('nombre_documento');
        $documento->contenido = Input::get('contenido');
        $documento->fecha = Input::get('fecha');
        $documento->id_seccion = Input::get('id_seccion');
        $documento->save();
        return Redirect::to('documentos')->with('notice','El documento ha sido modificado correctamente. ');
    }

    public function updateCoordinador(Request $request, $id)
    {
        $documento = Documento::find($id);
        $documento->nombre_documento = Input::get('nombre_documento');
        $documento->contenido = Input::get('contenido');
        $documento->fecha = Input::get('fecha');
        $documento->id_seccion = Input::get('id_seccion');
        $documento->save();
        return Redirect::to('coordinadors.coordinadorDocuments')->with('notice','El documento ha sido modificado correctamente. ');
    }

    public function updateProfesor(Request $request, $id)
    {
        $documento = Documento::find($id);
        $documento->nombre_documento = Input::get('nombre_documento');
        $documento->contenido = Input::get('contenido');
        $documento->fecha = Input::get('fecha');
        $documento->id_seccion = Input::get('id_seccion');
        $documento->save();
        return Redirect::to('profesors.profesorDocuments')->with('notice','El documento ha sido modificado correctamente. ');
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
        $documento = Documento::find($id);
        $documento->delete();
        return Redirect::to('documentos')->with('notice','El documento ha sido eliminado correctamente. ');
    }
}
