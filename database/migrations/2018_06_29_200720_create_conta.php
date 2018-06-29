<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('pago')->nullable($value = true);
            $table->integer('data')->nullable();
            $table->integer('data_pgto')->nullable();
            $table->integer('valor')->nullable();
            $table->unsignedInteger('caixaid');
            $table->foreign('caixaid')->references('id')->on('caixas');
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
        Schema::dropIfExists('contas');
    }
}
