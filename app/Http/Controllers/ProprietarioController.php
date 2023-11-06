<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{

    public function index() {
        $proprietario = Proprietario::all();
        return response()->json($proprietario);
    }

    public function store(Request $request) {
        $proprietario = new Proprietario;
        $proprietario->nome = $request->nome;
        $proprietario->cpf = $request->cpf;
        $proprietario->endereco = $request->endereco;
        $proprietario->telefone = $request->telefone;
        $proprietario->email = $request->email;
        $proprietario->rua = $request->rua;
        $proprietario->numero = $request->numero;
        $proprietario->bairro = $request->bairro;
        $proprietario->cep = $request-> cep;
        $proprietario->cidade = $request->cidade;
        $proprietario->uf = $request->uf;
        $proprietario->tipoConsulta = $request->tipoConsulta;
        return response()->json([
            "message" => "Proprietario criado"
        ], 201);
    }

    public function show($id) {
        $proprietario = Proprietario::find($id);
        if(!empty($proprietario)) {
            return response()->json($proprietario);
        }
        return response()->json([
            "message" => "Proprietario não encontrada"
        ], 404);
    }

    public function update($request, $id) {
        $proprietario = Proprietario::find($id);
        if (empty($proprietario)) {
            return response()->json([
                "message" => "Proprietario não encontrada"
            ], 404);
        }
        $proprietario->nome =  is_null($request->nome) ? $proprietario->nome : $request->tipoConsulta;
        $proprietario->cpf =  is_null($request->cpf) ? $proprietario->cpf : $request->cpf;
        $proprietario->endereco =  is_null($request->endereco) ? $proprietario->endereco : $request->endereco;
        $proprietario->telefone =  is_null($request->telefone) ? $proprietario->telefone : $request->telefone;
        $proprietario->email =  is_null($request->email) ? $proprietario->email : $request->email;
        $proprietario->rua =  is_null($request->rua) ? $proprietario->rua : $request->rua;
        $proprietario->numero =  is_null($request->numero) ? $proprietario->numero : $request->numero;
        $proprietario->bairro =  is_null($request->bairro) ? $proprietario->bairro : $request->bairro;
        $proprietario->cep =  is_null($request->cep) ? $proprietario->cep : $request->cep;
        $proprietario->cidade =  is_null($request->cidade) ? $proprietario->cidade : $request->cidade;
        $proprietario->uf =  is_null($request->uf) ? $proprietario->uf : $request->uf;
        $proprietario->tipoConsulta =  is_null($request->tipoConsulta) ? $proprietario->tipoConsulta : $request->tipoConsulta;
        $proprietario->save();

        return response()->json([
            "message" => "Proprietario atualizada"
        ], 200);
    }

    public function destroy($id) {
        if (Proprietario::where('id', $id)->exists()) {
            $proprietario = Proprietario::find($id);
            $proprietario->delete();
            return response()->json([
                "message" => "Proprietario deletada"
            ], 202);
        }
        return response()->json([
            "message" => "Proprietario não encontrada"
        ], 404);
    }
}
