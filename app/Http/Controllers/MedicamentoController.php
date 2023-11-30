<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{

    public function index() {
        $medicamento = Medicamento::all();
        return response()->json($medicamento);
    }

    public function store(Request $request) {
        $medicamento = new Medicamento;
        $medicamento->nome = $request->nome;
        $medicamento->principioAtivo = $request->principioAtivo;
        $medicamento->administracao = $request->administracao;
        $medicamento->dose = $request->dose;
        $medicamento->status = $request->status;
        $medicamento->lote = $request->lote;
        $medicamento->validade = $request->validade;
        $medicamento->id_classificacao = $request->id_classificacao;
        $medicamento->id_especie = $request->id_especie;
        $medicamento->save();
        return response()->json([
            "message" => "Medicamento criado"
        ], 201);
    }

    public function show($id) {
        $medicamento = Medicamento::find($id);
        if(!empty($medicamento)) {
            return response()->json($medicamento);
        }
        return response()->json([
            "message" => "Medicamento não encontrada"
        ], 404);
    }

    public function edit($id)
    {
        $obj = Medicamento::query()->find($id);
        return view('edits', ['medicamento'=> $obj]);
    }

    public function update(Request $request, $id) {
        $medicamento = Medicamento::find($id);
        if (empty($medicamento)) {
            return response()->json([
                "message" => "Medicamento não encontrada"
            ], 404);
        }
        $medicamento->nome = is_null($request->nome) ? $medicamento->nome : $request->nome;
        $medicamento->principioAtivo = is_null($request->principioAtivo) ? $medicamento->principioAtivo : $request->principioAtivo;
        $medicamento->administracao = is_null($request->administracao) ? $medicamento->administracao : $request->administracao;
        $medicamento->dose = is_null($request->dose) ? $medicamento->dose : $request->dose;
        $medicamento->lote = is_null($request->lote) ? $medicamento->lote : $request->lote;
        $medicamento->status = is_null($request->status) ? $medicamento->status : $request->status;
        $medicamento->validade = is_null($request->validade) ? $medicamento->validade : $request->validade;
        $medicamento->id_classificacao = is_null($request->id_classificacao) ? $medicamento->id_classificacao : $request->id_classificacao;
        $medicamento->id_especie = is_null($request->id_especie) ? $medicamento->id_especie : $request->id_especie;
        $medicamento->save();

        return response()->json([
            "message" => "Medicamento atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Medicamento::where('id', $id)->exists()) {
            $medicamento = Medicamento::find($id);
            $medicamento->delete();
            return response()->json([
                "message" => "Medicamento deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Medicamento não encontrada"
        ], 404);
    }
}
