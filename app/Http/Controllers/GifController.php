<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GifController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gif' => 'required|mimes:gif|max:50000' // Ajusta las restricciones según tus necesidades
        ]);

        if ($request->hasFile('gif')) {
            $gif = $request->file('gif');
            $ruta = $gif->store('gifs', 'public'); // Cambié 'img' a 'gifs' para guardar los gifs en una carpeta separada
            // Aquí podrías guardar $ruta en la base de datos si es necesario
        } else {
            // Manejar el caso cuando no hay archivo
            return redirect()->back()->withErrors('No se ha proporcionado ningún gif');
        }

        return redirect()->back()->with('success', 'GIF enviado correctamente');
    }
}
