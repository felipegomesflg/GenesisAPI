<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoitem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_items', function (Blueprint $table) {
          $table->increments('id')->nullable();
          $table->unsignedInteger('produtoid');
          $table->foreign('produtoid')->references('id')->on('produtos');
          $table->unsignedInteger('pedidoid');
          $table->foreign('pedidoid')->references('id')->on('pedidos');
          $table->integer('quantidade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidoitems');
    }
}
