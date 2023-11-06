<?php

namespace App\Http\Controllers;

use App\Models\CategoriaConsulta;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index() {
        $categoriaConsulta = CategoriaConsulta::all();
        return response()->json($categoriaConsulta);
    }

    public function store(Request $request) {
        $categoriaConsulta = new CategoriaConsulta;
        $categoriaConsulta->tipoConsulta = $request->tipoConsulta;
        return response()->json([
            "message" => "CategoriaConsulta criado"
        ], 201);
    }

    public function show($id) {
        $categoriaConsulta = CategoriaConsulta::find($id);
        if(!empty($categoriaConsulta)) {
            return response()->json($categoriaConsulta);
        }
        return response()->json([
            "message" => "CategoriaConsulta não encontrada"
        ], 404);
    }

    public function update($request, $id) {
        $categoriaConsulta = CategoriaConsulta::find($id);
        if (empty($categoriaConsulta)) {
            return response()->json([
                "message" => "CategoriaConsulta não encontrada"
            ], 404);
        }
        $categoriaConsulta->tipoConsulta =  is_null($request->tipoConsulta) ? $categoriaConsulta->tipoConsulta : $request->tipoConsulta;
        $categoriaConsulta->save();

        return response()->json([
            "message" => "CategoriaConsulta atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (CategoriaConsulta::where('id', $id)->exists()) {
            $categoriaConsulta = CategoriaConsulta::find($id);
            $categoriaConsulta->delete();
            return response()->json([
                "message" => "CategoriaConsulta deletada"
            ], 202);
        }
        return response()->json([
            "message" => "CategoriaConsulta não encontrada"
        ], 404);
    }
}
