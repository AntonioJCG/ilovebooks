@extends('layouts.plantilla')

@section('title', 'ILoveBooks')

@section('content')
<div class="principal container bg-light rounded p-5">
    <div class="container-fluid text-center mb-5">
        <h1>¡Bienvenido/a a ILoveBooks, hogar de mil historias!</h1>
    </div>
    <div class="banner container-fluid d-flex justify-content-center align-items-center mb-3 rounded">
        <div class="banner-img">
            <a href="{{route('biblioteca.index')}}"><img src="../public/imgs/banner-img.png" alt="" class="rounded"></a>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column mb-5">
        <div class="container-fluid my-2"><h1>Libros más leídos</h1><hr></div>
        <div class="row container-fluid d-flex justify-content-around">
            <div class="libro container-fluid d-flex flex-column col-12 col-md-4 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">{{$leidos[0]->nombre}}</p>
                </div>
                <div class="banner-img container-fluid d-flex justify-content-center mb-3">
                    <a href="{{ route('biblioteca.show', ['id' => $leidos[0]->id]) }}"><img src="{{$leidos[0]->imagen}}" alt=""></a>
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column col-12 col-md-4 rounded">
                <div class="banner-img container-fluid text-center">
                    <p class="titulo-libro">{{$leidos[1]->nombre}}</p>
                </div>
                <div class="banner-img container-fluid d-flex justify-content-center mb-3">
                    <a href="{{ route('biblioteca.show', ['id' => $leidos[1]->id]) }}"><img src="{{$leidos[1]->imagen}}" alt=""></a>
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column col-12 col-md-4 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">{{$leidos[2]->nombre}}</p>
                </div>
                <div class="banner-img container-fluid d-flex justify-content-center mb-3">
                    <a href="{{ route('biblioteca.show', ['id' => $leidos[3]->id]) }}"><img src="{{$leidos[2]->imagen}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column mb-5">
        <div class="container-fluid my-2"><h1>Últimos libros publicados</h1><hr></div>
        <div class="row container-fluid d-flex justify-content-around">
            <div class="libro container-fluid d-flex flex-column col-12 col-md-4 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">{{$publicados[0]->nombre}}</p>
                </div>
                <div class="banner-img container-fluid d-flex justify-content-center mb-3">
                    <a href="{{ route('biblioteca.show', ['id' => $publicados[0]->id]) }}"><img src="{{$publicados[0]->imagen}}" alt=""></a>
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column col-12 col-md-4 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">{{$publicados[1]->nombre}}</p>
                </div>
                <div class="banner-img container-fluid d-flex justify-content-center mb-3">
                    <a href="{{ route('biblioteca.show', ['id' => $publicados[1]->id]) }}"><img src="{{$publicados[1]->imagen}}" alt=""></a>
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column col-12 col-md-4 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">{{$publicados[2]->nombre}}</p>
                </div>
                <div class="banner-img container-fluid d-flex justify-content-center mb-3">
                    <a href="{{ route('biblioteca.show', ['id' => $publicados[2]->id]) }}"><img src="{{$publicados[2]->imagen}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
