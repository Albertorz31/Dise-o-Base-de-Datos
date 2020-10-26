<?php
namespace App\Http\Controllers;
use App\Horario;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //get
    public function index()
    {
        $horario = Horario::all();
        return View::make('horarios.index')->with('horarios',$horario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //get 
    public function create()
    {
        $horario = new Horario();
        return View::make('horarios.save')->with('horario',$horario);
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
        $horario = new Horario();
        $horario->dia = Input::get('dia');
        $horario->modulo = Input::get('modulo');
        $horario->save();
        return Redirect::to('horarios')->with('notice', 'El horario ha sido creado correctamente.');
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
        $horario = Horario::find($id);
        return View::make('horarios.show')->with('horario', $horario);
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
        $horario = Horario::find($id);
        return View::make('horarios.save')->with('horario',$horario);
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
        $horario = Horario::find($id);
        $horario->dia = Input::get('dia');
        $horario->modulo = Input::get('modulo');
        $horario->save();
        return Redirect::to('horarios')->with('notice', 'El horario ha sido modificado correctamente.');
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
        $horario = Horario::find($id);
        $horario->delete();
        return Redirect::to('horarios')->with('notice', 'El horario ha sido eliminado correctamente.');
    }
}
