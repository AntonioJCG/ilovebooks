@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Borrar')

@section('content')
<div class="principal form bg-light rounded px-4">
    <div class="container-fluid text-center my-5">
        <h2>Borra un libro</h2>
    </div>
    <div class="form container-fluid mb-5">
        <form action="{{Route('metodo.destroy')}}" method="POST">
            @csrf
            @method('delete')
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="number" class="form-control" id="id" name="idLibro">
            </div>
            <div class="container-fluid d-flex justify-content-around">
                <button type="submit" class="btn btn-danger">Borrar</button>
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