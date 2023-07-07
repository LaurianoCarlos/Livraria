<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;


class AutorController extends Controller
{
   
    public function index()
    {
        $autores = Autor::all();
        return response()->json($autores);
    }

    
    public function store(Request $request)
    {
        $autor = Autor::create($request->all());
        return response()->json($autor, 201);
    }

    
    public function show(string $id)
    {
        $autor = Autor::findOrFail($id);
        return response()->json($autor);
    }

    public function update(Request $request, string $id)
    {
        $autor = Autor::findOrFail($id);
        $autor->update($request->all());
        return response()->json($autor);
    }

    
    public function destroy(string $id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return response()->json(null, 204);
    }

    public function livrosDoAutor($id)
{
    $autor = Autor::findOrFail($id);
    $livros = $autor->livros;

    return response()->json($livros);
}

}
