@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Perfil')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Perfil</h1>
    </div>
    <div class="row container-fluid mb-5">
        <div class="col-md-4 col-sm-12 container-fluid d-flex flex-column align-items-center p-3">
            <h3 class="mb-4">Datos del usuario</h3>
            <p>Usuario: {{$usuario[0]->name}}</p>
            <p>Email: {{$usuario[0]->email}}</p>
        </div>
        <div class="col-md-8 col-sm-12 container-fluid d-flex flex-column align-items-center p-3">
            <h3 class="mb-4">Libros leídos</h3>
            <table class="table table-light table-hover text-center align-middle">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Género</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($libros as $libro)
                    <tr>
                        <td>{{$libro->nombreLibro}}</td>
                        <td>{{$libro->autorLibro}}</td>
                        <td>{{$libro->generoLibro}}</td>
                        <td>
                            <form action="{{ route('biblioteca.delete', ['id' => $libro->idLibro]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="width: 130px;">
                                    Borrar lectura
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection