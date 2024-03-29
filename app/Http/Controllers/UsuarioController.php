<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Usuario;
use App\Http\Resources\Usuario as UsuarioResource;


class UsuarioController extends Controller
{
  public function index()
  {
    $dado = Usuario::where('ativo',true)->get();
    return new UsuarioResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? Usuario::findOrFail($request->id) : new Usuario;
    $dado->ativo = $request->input('ativo');
    $dado->nome = $request->input('nome');
    $dado->cpf = $request->input('cpf');
    $dado->imagem = $request->input('imagem');
    $dado->usuario = $request->input('usuario');
    if($request->isMethod('post'))
    $dado->senha = md5($request->input('senha'));

    if($dado->save()){
        return new UsuarioResource($dado);
    }

  }

  public function login(Request $request){

        $dado = Usuario::where([
            ['usuario','=',$request->usuario],['senha','=',md5($request->senha)],['usuarios.ativo','=',true]
            ])->first();
        if(!$dado)
        return [];
        return $dado;
  }

  public function show($id)
  {
    $dado = Usuario::findOrFail($id);
    return new UsuarioResource($dado);
  }


  public function destroy($id)
  {
    $dado = Usuario::findOrFail($request->id);
    if($dado->delete()){
        return new UsuarioResource($dado);
    }
  }
}
