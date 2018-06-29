<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome')->nullable();
          $table->string('usuario')->nullable()->unique();
          $table->string('senha')->nullable();
          $table->string('imagem',100)->nullable();
          $table->string('cpf')->nullable();
          $table->boolean('ativo')->nullable($value = true);
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
        Schema::dropIfExists('usuarios');
    }
}
