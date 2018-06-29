<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
          $table->increments('id')->nullable();
          $table->boolean('ativo')->nullable($value = true);
          $table->string('imagem',100)->nullable();
          $table->string('nome')->nullable();
          $table->string('descricao');
          $table->unsignedInteger('usuarioid')->nullable();
          $table->foreign('usuarioid')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
