<?php

namespace App\Http\Controllers;

use App\Models\Classificacoes;
use Illuminate\Http\Request;

class ClassificacoesController extends Controller
{

    public function index() {
        $classificacao = Classificacoes::all();
        return response()->json($classificacao);
    }

    public function store(Request $request) {
        $classificacao = new Classificacoes;
        $classificacao->classificacao = $request->classificacao;
        return response()->json([
            "message" => "Classificacoes criado"
        ], 201);
    }

    public function show($id) {
        $classificacao = Classificacoes::find($id);
        if(!empty($classificacao)) {
            return response()->json($classificacao);
        }
        return response()->json([
            "message" => "Classificacoes não encontrada"
        ], 404);
    }

    public function update($request, $id) {
        $classificacao = Classificacoes::find($id);
        if (empty($classificacao)) {
            return response()->json([
                "message" => "Classificacoes não encontrada"
            ], 404);
        }
        $classificacao->classificacao =  is_null($request->classificacao) ? $classificacao->classificacao : $request->classificacao;
        $classificacao->save();

        return response()->json([
            "message" => "Classificacoes atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Classificacoes::where('id', $id)->exists()) {
            $classificacao = Classificacoes::find($id);
            $classificacao->delete();
            return response()->json([
                "message" => "Classificacoes deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Classificacoes não encontrada"
        ], 404);
    }
}
