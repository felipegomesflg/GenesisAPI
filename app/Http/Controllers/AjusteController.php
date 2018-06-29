<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ajuste;
use App\Http\Resources\Ajuste as AjusteResource;

class AjusteController extends Controller
{

    public function index()
    {
      $dado = Ajuste::where('ativo',true)->get();
      return new AjusteResource($dado);
    }

        public function store(Request $request)
    {

      $dado = $request->isMethod('put') ? Ajuste::findOrFail($request->id) : new Ajuste;
      $dado->ajustetipoid = $request->input('ajustetipoid');
      $dado->produtoid = $request->input('produtoid');
      $dado->quantidade = $request->input('quantidade');
      $dado->data = $request->input('data');
      $dado->fornecedorid = $request->input('fornecedorid');
      if($dado->save()){
          return new AjusteResource($dado);
      }

    }


    public function show($id)
    {
      $dado = Ajuste::findOrFail($id);
      return new AjusteResource($dado);
    }


    public function destroy($id)
    {
      $dado = Ajuste::findOrFail($request->id);
      if($dado->delete()){
          return new AjusteResource($dado);
      }
    }
}
