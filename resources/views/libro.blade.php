@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Libro')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>{{$libro->nombre}}</h1>
    </div>
    
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                <img src="{{ asset($libro->imagen) }}" alt="portada" class="img-fluid" style="max-height: 600px;">
            </div>
        
            <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center">
                <p>Autor: {{$libro->autor}}</p>
                <p>Fecha de publicación: {{$libro->publicacion}}</p>
                <p>Género: {{$libro->genero}}</p>
                <p>Sinopsis: {{$libro->descripcion}}</p>
                <form action="{{ route('biblioteca.store', ['id' => $libro->id]) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success" style="width: 150px;">
                        Agregar a leídos
                    </button>
                </form>
                @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection