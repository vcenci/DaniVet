<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{

    public function index() {
        $pacientes = Paciente::all();
        return response()->json($pacientes);
    }

    public function store(Request $request) {
        $pacientes = new Paciente;
        $pacientes->nome = $request->nome;
        $pacientes->idade = $request->idade;
        $pacientes->sexo = $request->sexo;
        $pacientes->pelagem = $request->pelagem;
        $pacientes->peso = $request->peso;
        $pacientes->id_raca = $request->id_raca;
        $pacientes->id_proprietario = $request->id_proprietario;
        return response()->json([
            "message" => "Paciente criado"
        ], 201);
    }

    public function show($id) {
        $pacientes = Paciente::find($id);
        if(!empty($pacientes)) {
            return response()->json($pacientes);
        }
        return response()->json([
            "message" => "Paciente não encontrada"
        ], 404);
    }

    public function update($request, $id) {
        $pacientes = Paciente::find($id);
        if (empty($pacientes)) {
            return response()->json([
                "message" => "Paciente não encontrada"
            ], 404);
        }

        $pacientes->nome =  is_null($request->nome) ? $pacientes->nome : $request->nome;
        $pacientes->idade =  is_null($request->idade) ? $pacientes->idade : $request->idade;
        $pacientes->sexo =  is_null($request->sexo) ? $pacientes->sexo : $request->sexo;
        $pacientes->pelagem =  is_null($request->pelagem) ? $pacientes->pelagem : $request->pelagem;
        $pacientes->peso =  is_null($request->peso) ? $pacientes->peso : $request->peso;
        $pacientes->id_raca =  is_null($request->id_raca) ? $pacientes->id_raca : $request->id_raca;
        $pacientes->id_proprietario =  is_null($request->id_proprietario) ? $pacientes->id_proprietario : $request->id_proprietario;
        $pacientes->save();

        return response()->json([
            "message" => "Paciente atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Paciente::where('id', $id)->exists()) {
            $pacientes = Paciente::find($id);
            $pacientes->delete();
            return response()->json([
                "message" => "Paciente deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Paciente não encontrada"
        ], 404);
    }
}
