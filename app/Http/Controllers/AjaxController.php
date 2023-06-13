<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class AjaxController extends Controller
{
    public function getLibros()
    {
        $libros = Libro::all();
        return response()->json($libros);
    }

    public function buscarLibros(Request $request)
    {
        $texto = $request->input('texto');

        $libros = Libro::where('nombre', 'like', '%'.$texto.'%')->get();

        return response()->json($libros);
    }

}
