<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{

    public function index() {
        $especie = Especie::all();
        return response()->json($especie);
    }

    public function store(Request $request) {
        $especie = new Especie;
        $especie->especie = $request->especie;
        return response()->json([
            "message" => "Especie criado"
        ], 201);
    }

    public function show($id) {
        $especie = Especie::find($id);
        if(!empty($especie)) {
            return response()->json($especie);
        }
        return response()->json([
            "message" => "Especie não encontrada"
        ], 404);
    }

    public function update($request, $id) {
        $especie = Especie::find($id);
        if (empty($especie)) {
            return response()->json([
                "message" => "Especie não encontrada"
            ], 404);
        }
        $especie->especie =  is_null($request->especie) ? $especie->especie : $request->especie;
        $especie->save();

        return response()->json([
            "message" => "Especie atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Especie::where('id', $id)->exists()) {
            $especie = Especie::find($id);
            $especie->delete();
            return response()->json([
                "message" => "Especie deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Especie não encontrada"
        ], 404);
    }
}
