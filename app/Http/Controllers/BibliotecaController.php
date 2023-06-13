<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Lectura;
use Illuminate\Support\Facades\Auth;


class BibliotecaController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('biblioteca', compact('libros'));
    }

    public function show($id)
    {
        $libro = Libro::find($id);
        return view('libro', compact('libro'));
    }

    public function store($id)
    {
        $elegido = Libro::find($id);
        
        // Validar si ya existe una lectura con el mismo idLibro y idUsuario
        $lecturaExistente = Lectura::where('idLibro', $elegido->id)
                                ->where('idUsuario', Auth::user()->id)
                                ->first();
        
        if ($lecturaExistente) {
            // Ya existe una lectura registrada y muestra un error
            return redirect()->back()->withInput()->withErrors('Ese libro ya está en tu lista de lecturas.');
        }
        
        // Registrar una nueva lectura
        $lectura = Lectura::firstOrCreate(
            ['idLibro' => $elegido->id, 'idUsuario' => Auth::user()->id],
            [
                'nombreLibro' => $elegido->nombre,
                'autorLibro' => $elegido->autor,
                'generoLibro' => $elegido->genero,
            ]
        );

        // Actualizar la cantidad de lecturas del libro
        $elegido->lecturas += 1;
        $elegido->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        // Buscar la lectura por la ID del libro y el ID del usuario actualmente autenticado
        $lectura = Lectura::where('idLibro', $id)
                        ->where('idUsuario', Auth::user()->id)
                        ->first();
        
        if ($lectura) {
            // Se encontró la lectura, se puede eliminar
            $lectura->delete();

            // Restar la cantidad de lecturas del libro correspondiente
            $libro = Libro::find($id);
            $libro->lecturas -= 1;
            $libro->save();

            return redirect()->route('perfil');
        }

        // No se encontró la lectura y redigire a la biblioteca sin hacer nada
        return redirect()->route('biblioteca.index');
    }
}
