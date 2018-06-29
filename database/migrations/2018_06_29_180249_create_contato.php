<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('ativo')->nullable($value = true);
          $table->string('nome')->nullable();
          $table->string('cpf')->nullable();
          $table->string('rg')->nullable();
          $table->string('email')->nullable();
          $table->string('telefone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
