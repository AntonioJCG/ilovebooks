@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Crear')

@section('content')
<div class="principal form bg-light rounded px-4">
    <div class="container-fluid text-center my-5">
        <h2>Crea un libro</h2>
    </div>
    <div class="form container-fluid mb-5">
        <form action="{{Route('metodo.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" cols="10" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <input type="text" class="form-control" id="genero" name="genero">
            </div>
            <div class="mb-3">
                <label for="publicacion" class="form-label">Fecha publicación</label>
                <input type="date" class="form-control" id="publicacion" name="publicacion">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
            <div class="container-fluid d-flex justify-content-around">
                <button type="submit" class="btn btn-success">Crear</button>
            </div>
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
@endsection