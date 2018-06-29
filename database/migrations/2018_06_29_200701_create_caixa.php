<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaixa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixas', function (Blueprint $table) {
          $table->increments('id')->nullable();
          $table->string('cod')->nullable();
          $table->integer('data_inicial')->nullable();
          $table->integer('data_final')->nullable();
          $table->integer('saldo_inicial')->nullable();
          $table->integer('saldo_final')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caixas');
    }
}
