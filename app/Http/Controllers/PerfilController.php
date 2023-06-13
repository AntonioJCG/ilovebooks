<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lectura;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function showUsuario()
    {
        $usuario = User::where('id', Auth::user()->id)->get();
        $libros = Lectura::where('idUsuario', Auth::user()->id)->get();
        if ($usuario[0]->admin == true) {
            return view('perfilAdmin', compact('usuario'), compact('libros'));
        } else {
            return view('perfil', compact('usuario'), compact('libros'));
        }
    }
}
