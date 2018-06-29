<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contato;
use App\Http\Resources\Contato as ContatoResource;

class ContatoController extends Controller
{
  public function index()
  {
    $dado = Contato::where('ativo',true)->get();
    return new ContatoResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? Contato::findOrFail($request->id) : new Contato;
    $dado->nome = $request->input('nome');
    $dado->cpf = $request->input('cpf');
    $dado->rg = $request->input('rg');
    $dado->email = $request->input('email');
    $dado->telefone = $request->input('telefone');

    if($dado->save()){
        return new ContatoResource($dado);
    }

  }


  public function show($id)
  {
    $dado = Contato::findOrFail($id);
    return new ContatoResource($dado);
  }


  public function destroy($id)
  {
    $dado = Contato::findOrFail($request->id);
    if($dado->delete()){
        return new ContatoResource($dado);
    }
  }
}
