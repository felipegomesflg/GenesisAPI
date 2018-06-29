<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
          $table->increments('id')->nullable();
          $table->unsignedInteger('fornecedorid');
          $table->foreign('fornecedorid')->references('id')->on('fornecedores');
          $table->unsignedInteger('usuarioid');
          $table->foreign('usuarioid')->references('id')->on('usuarios');
          $table->integer('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
