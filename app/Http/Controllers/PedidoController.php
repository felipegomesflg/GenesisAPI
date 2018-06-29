<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pedido;
use App\Http\Resources\Pedido as PedidoResource;

class PedidoController extends Controller
{
  public function index()
  {
    $dado = Pedido::all();
    return new PedidoResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? Pedido::findOrFail($request->id) : new Pedido;
    $dado->fornecedorid = $request->input('fornecedorid');
    $dado->usuarioid = $request->input('usuarioid');
    $dado->data = $request->input('data');

    if($dado->save()){
        return new PedidoResource($dado);
    }

  }


  public function show($id)
  {
    $dado = Pedido::findOrFail($id);
    return new PedidoResource($dado);
  }


  public function destroy($id)
  {
    $dado = Pedido::findOrFail($request->id);
    if($dado->delete()){
        return new PedidoResource($dado);
    }
  }
}
