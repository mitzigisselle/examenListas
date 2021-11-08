@extends('layout.plantilla')
@section('title','Lista')
@section('contenido')

<div class="row mt-5">
    <div class="col">
        <h1 class="text-center display-4"><strong>Aqui encontraras una lista de titulos de libros. Podras actulizar cualquier libro a tu manera</strong></h1>
        <h1 class="text-center display-4 text-success" ><strong>Bienvenido!!!!</strong></h1>
        
    </div>
</div>


<div class="row mt-5">
    <div class="col">
        
        <li class="list-group-item">
            <table class="table table-success table-striped">
                    <thead >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Fecha de publicacion</th>
                            <th scope="col">Numero de paginas</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                
                <tbody>
                    @foreach($libro as $libros)
                    <tr>
                        <th>{{$libros->id}}</th>
                        <th>{{$libros->titulo}}</th>
                        <th>{{$libros->autor}}</th>
                        <th>{{$libros->editorial}}</th>
                        <th>{{$libros->fecha_publicacion}}</th>
                        <th>{{$libros->numero_pagina}}</th>
                        <th><a class="btn btn-success" href="{{route('libros.mostrar', $libros->id)}}"><i class="fas fa-edit"></i></a></th>
                        <th>
                            <form action="{{route('libros.destroy', $libros)}}" method="POST">
                            @csrf    
                            @method('delete')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </th>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </li>    
        
    </div>
</div>
@endsection
@section('pagina')
{{$libro->links()}}
@endsection