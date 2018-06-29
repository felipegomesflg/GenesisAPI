<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\AjusteTipo;
use App\Http\Resources\AjusteTipo as AjusteTipoResource;

class AjusteTipoController extends Controller
{
  public function index()
  {
    $dado = AjusteTipo::where('ativo',true)->get();
    return new AjusteTipoResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? AjusteTipo::findOrFail($request->id) : new AjusteTipo;
    $dado->nome = $request->input('nome');
    $dado->modificador = $request->input('modificador');

    if($dado->save()){
        return new AjusteTipoResource($dado);
    }

  }


  public function show($id)
  {
    $dado = AjusteTipo::findOrFail($id);
    return new AjusteTipoResource($dado);
  }


  public function destroy($id)
  {
    $dado = AjusteTipo::findOrFail($request->id);
    if($dado->delete()){
        return new AjusteTipoResource($dado);
    }
  }
}
