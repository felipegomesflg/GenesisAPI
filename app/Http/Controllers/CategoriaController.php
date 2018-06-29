<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categoria;
use App\Http\Resources\Categoria as CategoriaResource;

class CategoriaController extends Controller
{
  public function index()
  {
    $dado = Categoria::where('ativo',true)->get();
    return new CategoriaResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? Categoria::findOrFail($request->id) : new Categoria;
    $dado->ativo = $request->input('ativo');
    $dado->imagem = $request->input('imagem');
    $dado->nome = $request->input('nome');
    $dado->descricao = $request->input('descricao');
    $dado->usuarioid = $request->input('usuarioid');

    if($dado->save()){
        return new CategoriaResource($dado);
    }

  }


  public function show($id)
  {
    $dado = Categoria::findOrFail($id);
    return new CategoriaResource($dado);
  }


  public function destroy($id)
  {
    $dado = Categoria::findOrFail($request->id);
    if($dado->delete()){
        return new CategoriaResource($dado);
    }
  }
}
