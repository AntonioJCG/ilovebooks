<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class MetodosController extends Controller
{
    public function store(Request $request)
    {
        $nombre = $request->nombre;
        $autor = $request->autor;
        $descripcion = $request->descripcion;
        $genero = $request->genero;
        $publicacion = $request->publicacion;
        $imagen = $request->imagen;

        if ($nombre === null || $autor === null || $descripcion === null || $genero === null || $publicacion === null || $imagen === null) {
            return redirect()->back()->withErrors('Debes completar todos los campos.');
        }

        $libro = new Libro();
        $libro->nombre = $nombre;
        $libro->autor = $autor;
        $libro->descripcion = $descripcion;
        $libro->genero = $genero;
        $libro->publicacion = $publicacion;
        $libro->imagen = $imagen;
        $libro->lecturas = 0;
        $libro->save();

        return view('metodo.create');
    }


    public function update(Request $request, Libro $libro)
    {
        $nombre = $request->nombre;
        $autor = $request->autor;
        $descripcion = $request->descripcion;
        $genero = $request->genero;
        $publicacion = $request->publicacion;
        $imagen = $request->imagen;
        $lecturas = $request->lecturas;

        if ($nombre === null || $autor === null || $descripcion === null || $genero === null || $publicacion === null || $imagen === null || $lecturas === null) {
            return redirect()->back()->withErrors('Debes completar todos los campos.');
        }

        $libro->nombre = $nombre;
        $libro->autor = $autor;
        $libro->descripcion = $descripcion;
        $libro->genero = $genero;
        $libro->publicacion = $publicacion;
        $libro->imagen = $imagen;
        $libro->lecturas = $lecturas;
        $libro->save();

        return view('metodo.update');
    }

    public function destroy(Request $request)
    {
        $libro = Libro::find($request->idLibro);
        
        if ($libro) {
            $libro->delete();
            return view('metodo.delete');
        }
        
        // El libro no se encontró y muestra el error
        return redirect()->back()->withErrors('No existe ningún libro con esa id.');
    }

}
