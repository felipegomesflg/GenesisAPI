<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('ativo')->nullable($value = true);
          $table->string('imagem',100)->nullable();
          $table->string('nome')->nullable();
          $table->string('descricao')->nullable();
          $table->integer('quantidade')->nullable();
          $table->integer('preco')->nullable();
          $table->integer('preco_custo')->nullable();
          $table->integer('estoque_minimo')->nullable();
          $table->unsignedInteger('categoriaid');
          $table->foreign('categoriaid')->references('id')->on('categorias');
          $table->unsignedInteger('usuarioid');
          $table->foreign('usuarioid')->references('id')->on('usuarios');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
