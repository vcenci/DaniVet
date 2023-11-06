<?php

namespace App\Http\Controllers;

use App\Models\Raca;
use Illuminate\Http\Request;

class RacaController extends Controller
{

    public function index() {
        $raca = Raca::all();
        return response()->json($raca);
    }

    public function store(Request $request) {
        $raca = new Raca;
        $raca->tipoConsulta = $request->tipoConsulta;
        return response()->json([
            "message" => "Raca criado"
        ], 201);
    }

    public function show($id) {
        $raca = Raca::find($id);
        if(!empty($raca)) {
            return response()->json($raca);
        }
        return response()->json([
            "message" => "Raca não encontrada"
        ], 404);
    }

    public function update($request, $id) {
        $raca = Raca::find($id);
        if (empty($raca)) {
            return response()->json([
                "message" => "Raca não encontrada"
            ], 404);
        }
        $raca->raca =  is_null($request->raca) ? $raca->raca : $request->raca;
        $raca->id_especie =  is_null($request->id_especie) ? $raca->id_especie : $request->id_especie;
        $raca->save();

        return response()->json([
            "message" => "Raca atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Raca::where('id', $id)->exists()) {
            $raca = Raca::find($id);
            $raca->delete();
            return response()->json([
                "message" => "Raca deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Raca não encontrada"
        ], 404);
    }
}
