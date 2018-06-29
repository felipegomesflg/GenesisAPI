<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Fornecedor;
use App\Http\Resources\Fornecedor as FornecedorResource;

class FornecedorController extends Controller
{
  public function index()
  {
    $dado = Fornecedor::where('ativo',true)->get();
    return new FornecedorResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? Fornecedor::findOrFail($request->id) : new Fornecedor;
    $dado->ativo = $request->input('ativo');
    $dado->imagem = $request->input('imagem');
    $dado->usuarioid = $request->input('usuarioid');
    $dado->nome = $request->input('nome');
    $dado->cpf_cnpj = $request->input('cpf_cnpj');
    $dado->cep = $request->input('cep');
    $dado->endereco = $request->input('endereco');
    $dado->numero = $request->input('numero');
    $dado->complemento = $request->input('complemento');
    $dado->cidade = $request->input('cidade');
    $dado->estado = $request->input('estado');
    $dado->pais = $request->input('pais');
    $dado->contatoid = $request->input('contatoid');

    if($dado->save()){
        return new FornecedorResource($dado);
    }

  }


  public function show($id)
  {
    $dado = Fornecedor::findOrFail($id);
    return new FornecedorResource($dado);
  }


  public function destroy($id)
  {
    $dado = Fornecedor::findOrFail($request->id);
    if($dado->delete()){
        return new FornecedorResource($dado);
    }
  }
}
