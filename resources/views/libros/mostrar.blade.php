@extends('layout.plantilla')
@section('title','Usuarios' . $libro)
@section('contenido')

<h1 class="text-center text-dark display-4"><strong>Datos del libro</strong></h1>



<div class="row mt-3">
    <div class="col">
        <div class="jumbotron jumbotron-fluid">
            <a href="{{route('libros.index', $libro)}}" class="btn btn-success"><i class="fas fa-reply"> Regresar</i></a>
            <a href="{{route('libros.edit', $libro)}}" class="btn btn-success"><i class="far fa-edit"> Editar datos</i></a>
        
            <div class="container">
                <p class="lead">
                <div class="card mt-3">
                    
                    <div class="card-body bg-success" >
                        <p><strong>Titulo del Libro: </strong>{{$libro->titulo}}</p>
                        <p><strong>Autor: </strong>{{$libro->autor}}</p>
                        <p><strong>Editorial: </strong>{{$libro->editorial}}</p>
                        <p><strong>Fecha: </strong>{{$libro->fecha_publicacion}}</p>
                        <p><strong>Numero de paginas: </strong>{{$libro->numero_pagina}}</p>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection