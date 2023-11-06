<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConsultaController extends Controller
{

    public function index() {
        $consultas = Consulta::all();
        return response()->json($consultas);
    }

    public function store(Request $request) {
        $consulta = new Consulta;
        $consulta->descricao = $request->descricao;
        $consulta->data = $request->data;
        $consulta->id_categoria = $request->id_categoria;
        $consulta->id_paciente = $request->id_paciente;

        return response()->json([
            "message" => "Consulta criada"
        ], 201);
    }

    public function show($id) {
        $consulta = Consulta::find($id);
        if(!empty($consulta)) {
            return response()->json($consulta);
        }
        return response()->json([
            "message" => "Consulta não encontrada"
        ], 404);
    }

    public function update($request, $id) {
        $consulta = Consulta::find($id);
        if (empty($consulta)) {
            return response()->json([
                "message" => "Consulta não encontrada"
            ], 404);
        }
        $consulta->descricao = is_null($request->descricao) ? $consulta->descricao : $request->descricao;
        $consulta->data = is_null($request->data) ? $consulta->data : $request->data;
        $consulta->id_categoria = is_null($request->id_categoria) ? $consulta->id_categoria : $request->id_categoria;
        $consulta->id_paciente = is_null($request->id_paciente) ? $consulta->id_paciente : $request->id_paciente;
        $consulta->save();

        return response()->json([
            "message" => "Consulta atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Consulta::where('id', $id)->exists()) {
            $consulta = Consulta::find($id);
            $consulta->delete();
            return response()->json([
                "message" => "Consulta deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Consulta não encontrada"
        ], 404);
    }
}
