<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produto;
use App\Http\Resources\Produto as ProdutoResource;

class ProdutoController extends Controller
{
  public function index()
  {
    $dado = Produto::where('ativo',true)->get();
    return new ProdutoResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? Produto::findOrFail($request->id) : new Produto;
    $dado->ativo = $request->input('ativo');
    $dado->imagem = $request->input('imagem');
    $dado->nome = $request->input('nome');
    $dado->categoriaid = $request->input('categoriaid');
    $dado->quantidade = $request->input('quantidade');
    $dado->preco = $request->input('preco');
    $dado->preco_custo = $request->input('preco_custo');
    $dado->estoque_minimo = $request->input('estoque_minimo');
    $dado->descricao = $request->input('descricao');


    if($dado->save()){
        return new ProdutoResource($dado);
    }

  }


  public function show($id)
  {
    $dado = Produto::findOrFail($id);
    return new ProdutoResource($dado);
  }


  public function destroy($id)
  {
    $dado = Produto::findOrFail($request->id);
    if($dado->delete()){
        return new ProdutoResource($dado);
    }
  }
}
