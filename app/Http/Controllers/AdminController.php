<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class AdminController extends Controller
{
    public function create()
    {
        $id = Libro::all();
        return view('admin.create', compact('id'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        
        $libro = Libro::find($id);
        
        if (!$libro) {
            return redirect()->back()->withErrors('El libro buscado no existe.');
        }
        
        $libro = Libro::where('id', $id)->get();

        return view('admin.update', compact('libro'));
    }

    public function delete()
    {
        return view('admin.delete');
    }
}
