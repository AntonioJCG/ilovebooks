@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Perfil')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Perfil</h1>
    </div>
    <div class="row container-fluid mb-5">
        <div class="container-fluid d-flex flex-column align-items-center p-3 col-md-4 col-sm-12">
            <h3 class="mb-4">Datos del usuario</h3>
            <p>Usuario: {{$usuario[0]->name}}</p>
            <p>Email: {{$usuario[0]->email}}</p>
        </div>
        <div class="container-fluid d-flex flex-column align-items-center p-3 col-md-8 col-sm-12">
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
        <div class="container-fluid d-flex flex-column align-items-center p-3">
            <h3 class="mb-4">Administración</h3>
            <form action="{{Route('admin.create')}}" method="get">
                <button type="submit" class="btn btn-success mb-3">
                    Agregar libro
                </button>
            </form>
            <form action="{{Route('admin.update')}}" method="get" class="container-fluid d-flex flex-column align-items-center">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id">
                </div>
                <button type="submit" class="btn btn-primary mb-3">
                    Modificar libro
                </button>
            </form>
            <form action="{{Route('admin.delete')}}" method="get">
                <button type="submit" class="btn btn-danger mb-3">
                    Borrar libro
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
@endsection