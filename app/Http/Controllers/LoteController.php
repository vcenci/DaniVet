<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use Illuminate\Http\Request;

class LoteController extends Controller
{

    public function index() {
        $lote = Lote::all();
        return response()->json($lote);
    }

    public function store(Request $request) {
        $lote = new Lote;
        $lote->tipoConsulta = $request->tipoConsulta;
        $lote->save();
        return response()->json([
            "message" => "Lote criado"
        ], 201);
    }

    public function show($id) {
        $lote = Lote::find($id);
        if(!empty($lote)) {
            return response()->json($lote);
        }
        return response()->json([
            "message" => "Lote não encontrada"
        ], 404);
    }

    public function edit($id)
    {
        $lote = Lote::query()->find($id);
        return view('edits', ['lote'=> $lote]);
    }

    public function update(Request $request, $id) {
        $lote = Lote::find($id);
        if (empty($lote)) {
            return response()->json([
                "message" => "Lote não encontrada"
            ], 404);
        }
        $lote->lote =  is_null($request->lote) ? $lote->lote : $request->lote;
        $lote->save();

        return response()->json([
            "message" => "Lote atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Lote::where('id', $id)->exists()) {
            $lote = Lote::find($id);
            $lote->delete();
            return response()->json([
                "message" => "Lote deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Lote não encontrada"
        ], 404);
    }
}
