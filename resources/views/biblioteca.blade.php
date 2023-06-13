@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Biblioteca')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Buscador de libros</h1>
    </div>
    <div class="container-fluid mb-5">
        
        <div class="input-group d-flex justify-content-center mb-5">
            <div class="form-outline">
                <input type="text" id="texto" name="texto" class="form-control" onkeyup="buscarLibros()">
            </div>
        </div>
        
        <div class="row container-fluid bg-light p-3" id="list">
            @foreach ($libros as $libro)
            <div class="libro container-fluid text-center p-3 col-12 col-md-4">
                <p class="titulos mb-3">{{$libro->nombre}}</p>
                <div class="banner-img container-fluid d-flex justify-content-center">
                    <a href="{{ route('biblioteca.show', ['id' => $libro->id]) }}"><img src="{{$libro->imagen}}" alt=""></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var timer;

    function buscarLibros() {
        var texto = $('#texto').val();
        var showRoute = '{{ route("biblioteca.show", ["id" => ":id"]) }}';

        clearTimeout(timer);

        timer = setTimeout(function() {
            $.ajax({
                url: '{{ route("libros.buscar") }}',
                method: 'GET',
                data: {
                    texto: texto
                },
                success: function(response) {
                    // Limpiar el listado actual
                    $('#list').empty();

                    // Iterar sobre los libros y agregarlos al listado
                    $.each(response, function(index, libro) {
                        var html = '<div class="libro container-fluid text-center p-3 col-12 col-md-4">';
                        html += '<p class="titulos mb-3">' + libro.nombre + '</p>';
                        html += '<div class="banner-img container-fluid d-flex justify-content-center">';
                        html += '<a href="' + showRoute.replace(":id", libro.id) + '"><img src="' + libro.imagen + '" alt=""></a>';
                        html += '</div></div>';
                        $('#list').append(html);
                    });
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }, 100); // Esperar 0.5 segundos después de que el usuario deje de escribir
    }
</script>

@endsection
