@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Actualizar')

@section('content')
<div class="principal form bg-light rounded px-4">
    <div class="container-fluid text-center my-5">
        <h2>Actualiza un libro</h2>
    </div>
    <div class="form container-fluid mb-5">
        <form action="{{Route('metodo.update', $libro[0])}}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="number" class="form-control" id="id" name="id" value="{{$libro[0]->id}}">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$libro[0]->nombre}}">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" value="{{$libro[0]->autor}}">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" name="descripcion" class="form-control" cols="10" rows="10">{{$libro[0]->descripcion}}</textarea>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <input type="text" class="form-control" id="genero" name="genero" value="{{$libro[0]->genero}}">
            </div>
            <div class="mb-3">
                <label for="publicacion" class="form-label">Fecha publicación</label>
                <input type="date" class="form-control" id="publicacion" name="publicacion" value="{{$libro[0]->publicacion}}">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen" value="{{$libro[0]->imagen}}">
            </div>
            <div class="mb-3">
                <label for="lecturas" class="form-label">Lecturas</label>
                <input type="number" class="form-control" id="lecturas" name="lecturas" value="{{$libro[0]->lecturas}}">
            </div>
            <div class="container-fluid d-flex justify-content-around">
                <button type="submit" class="btn btn-primary">Modificar</button>
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