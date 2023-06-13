<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class HomeController extends Controller
{
    public function __invoke()
    {
        $leidos = Libro::orderby('lecturas', 'desc')->get();
        $publicados = Libro::orderby('publicacion', 'desc')->get();
        return view('home', compact('leidos'), compact('publicados'));
    }
}
