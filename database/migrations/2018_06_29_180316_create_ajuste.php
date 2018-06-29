<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjuste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajustes', function (Blueprint $table) {
          $table->increments('id')->nullable();
          $table->boolean('ativo')->nullable($value = true);
          $table->unsignedInteger('ajustetipoid');
          $table->foreign('ajustetipoid')->references('id')->on('ajuste_tipos');
          $table->unsignedInteger('produtoid');
          $table->foreign('produtoid')->references('id')->on('produtos');
          $table->unsignedInteger('fornecedorid');
          $table->foreign('fornecedorid')->references('id')->on('fornecedores');
          $table->unsignedInteger('usuarioid');
          $table->foreign('usuarioid')->references('id')->on('usuarios');
          $table->integer('quantidade')->nullable();
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
        Schema::dropIfExists('ajustes');
    }
}
