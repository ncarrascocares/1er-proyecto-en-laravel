<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){

    	  $notas = App\Nota::all();

    	  return view('inicio', compact('notas'));
    }

    public function detalle($id){
    	//Aqui valida si existe, sino redirije a la págima de error 404
    	$nota = App\Nota::findOrFail($id);

    	return view('notas.detalle', compact('nota'));
    }

    public function fotos(){

    	return view('fotos');
    }

    public function blog(){

    	return view('blog');
    }

    public function nosotros($nombre = null){
    	$equipo = ['Nicolas','Juanito', 'Pedrito'];

	//return view('nosotros', ['equipo'=>$equipo]);

	return view('nosotros', compact('equipo', 'nombre'));
    }

    public function crear(Request $request){

        //return $request->all();

        //Validando la informacion ingresada por el usuario
        $request->validate(['nombre' =>'required', 'descripcion' => 'required']);


        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota Agregada');
    }

}
