<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibreriaControl extends Controller
{
    public function index(){
        $libro = Libros::orderBy('id','desc')->paginate();
        return view('libros.index', compact('libro'));
    }
    public function mostrar(Libros $libro){
        return view ('libros.mostrar', compact('libro'));
    }

    public function edit(Libros $libro){

        return view ('libros.edit', compact('libro'));

    }

    public function update(Request $request, Libros $libro){

        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->numero_pagina = $request->numero_pagina;
       
        $libro->save();

        return redirect()->route('libros.mostrar', $libro);
    }

    public function destroy(Libros $libro){
        $libro->delete();
        return redirect()->route('libros.index');
    }


}
