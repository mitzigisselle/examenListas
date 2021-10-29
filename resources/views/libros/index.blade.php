@extends('layout.plantilla')
@section('title','Lista')
@section('contenido')

<div class="row mt-5">
    <div class="col">
        <h1 class="text-center"><strong>Aqui encontra una lista de titulos de libros. Al darle click te mostrara la informacion de cada libro.</strong></h1>
        <h1 class="text-center"><strong>Bienvenido!!!!</strong></h1>
        
    </div>
</div>


<div class="row mt-5">
    <div class="col">
        <ul class="list-group" >
            <li class="list-group-item active bg-dark">Titulos de Libros</li>
            @foreach($libro as $libros)
            <li class="list-group-item" style="background-color:#8c8c8c">
                <a class="texto" href="{{route('libros.mostrar', $libros->id)}}">{{$libros->titulo}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@section('pagina')
{{$libro->links()}}
@endsection