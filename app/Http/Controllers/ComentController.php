<?php

namespace App\Http\Controllers;

use App\Coment;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MComentarios = Coment::all();
        return response()->json($MComentarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $C_comentario = new Coment;
        $C_comentario->comentario = $request->comentario;
        $C_comentario->post_id = $request->postid;
        $C_comentario->save();

        return 'Comentario creado correctamente';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mostrar = Coment::find($id);
        return response()->json($mostrar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(Coment $coment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editar = Coment::find($id); //Aquí busco el id de la tabla
        $editar->comentario = $request->comentario;//Después aquí en la variable editar en el campo post es igual a todos los campos del formulario y postsito lo va a poner en el campo post
        $editar->save(); //Guardo
        return 'El post fue modificado correctamente';
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar = Coment::find($id);
        $eliminar->delete();
        return 'El comentario se ha eliminado correctamente';
    }
}
