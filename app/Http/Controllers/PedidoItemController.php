<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PedidoItem;
use App\Http\Resources\PedidoItem as PedidoItemResource;

class PedidoItemController extends Controller
{
  public function index()
  {
    $dado = PedidoItem::all();
    return new PedidoItemResource($dado);
  }

      public function store(Request $request)
  {

    $dado = $request->isMethod('put') ? PedidoItem::findOrFail($request->id) : new PedidoItem;
    $dado->pedidoid = $request->input('pedidoid');
    $dado->produtoid = $request->input('produtoid');
    $dado->quantidade = $request->input('quantidade');

    if($dado->save()){
        return new PedidoItemResource($dado);
    }

  }


  public function show($id)
  {
    $dado = PedidoItem::findOrFail($id);
    return new PedidoItemResource($dado);
  }


  public function destroy($id)
  {
    $dado = PedidoItem::findOrFail($request->id);
    if($dado->delete()){
        return new PedidoItemResource($dado);
    }
  }
}
