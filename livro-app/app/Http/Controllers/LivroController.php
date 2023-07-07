<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    
    public function index()
    {
        $livros = Livro::all();
       //return dd($livros);
       return response()->json($livros);
    }

   
    public function store(Request $request)
    {
        $livro = Livro::create($request->all());
        return response()->json($livro, 201);
    }

   
    public function show(string $id)
    {
        $livro = Livro::findOrFail($id);
        return response()->json($livro);
    }

    
    public function update(Request $request, string $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($request->all());
        return response()->json($livro);
    }

    
    public function destroy(string $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return response()->json(null, 204);
    }
}
