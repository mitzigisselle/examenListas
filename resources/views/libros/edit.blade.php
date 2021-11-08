@extends('layout.plantilla')
@section('title','Usuarios edit')
@section('contenido')


    <h1 class="text-center text-success display-4"><strong>Actualizar datos del libro</strong></h1>

    <hr>

    <div class="row mt-3">
        <div class="col">
            <div class="jumbotron jumbotron-fluid">
            
                <div class="container">
                    <p class="lead">
                        <div class="card mt-3 ">
                            
                            <form action="{{route('libros.update', $libro)}}" method="post">
                                @csrf

                                @method('put')
                                
                                <label for=""><strong>Titulo del Libro:</strong></label>
                                <input class="border border-success" type="text" name="titulo" value="{{$libro->titulo}}">
                                
                                <br>
                                <label for=""><strong>Autor:</strong></label>
                                <input class="border border-success" type="text" name="autor" value="{{$libro->autor}}">

                                <br>
                                <label for=""><strong>Editorial:</strong></label>
                                <input class="border border-success" type="text" name="editorial" value="{{$libro->editorial}}">

                                <br>
                                <label for=""><strong>Fecha de publicacion:</strong></label>
                                <input class="border border-success" type="date" name="fecha_publicacion" value="{{$libro->fecha_publicacion}}">

                                <br>
                                <label for=""><strong>Numero de paginas:</strong></label>
                                <input class="border border-success" type="number" name="numero_pagina" value="{{$libro->numero_pagina}}">

                                <br>
                                <button class="btn btn-success" type="submit" ><i class="fas fa-save"> Guardar</i></button>
                            </form>
                        </div>
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    




@endsection