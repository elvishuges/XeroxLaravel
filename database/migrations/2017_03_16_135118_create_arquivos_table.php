<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('hash');
            $table->date('dataDeBusca');
            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->integer('id_xerox');
            $table->foreign('id_xerox')->references('id')->on('xeroxes');
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
        Schema::dropIfExists('arquivos');
    }
}
