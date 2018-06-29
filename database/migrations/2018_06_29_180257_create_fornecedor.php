<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('ativo')->nullable($value = true);
          $table->string('imagem',100)->nullable();
          $table->string('nome')->nullable();
          $table->string('cpf_cpnj');
          $table->string('cep');
          $table->string('endereco');
          $table->string('numero');
          $table->string('complemento');
          $table->string('cidade');
          $table->string('estado');
          $table->string('pais');
          $table->unsignedInteger('contatoid');
          $table->foreign('contatoid')->references('id')->on('contatos');
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
        Schema::dropIfExists('fornecedores');
    }
}
