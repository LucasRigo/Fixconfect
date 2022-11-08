<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeloProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_processos', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->bigInteger('modelo_id')->unsigned()->nullable();
            $table->foreign('modelo_id')->references('id')->on('modelos');

            $table->bigInteger('processo_id')->unsigned()->nullable();
            $table->foreign('processo_id')->references('id')->on('processos');

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
        Schema::dropIfExists('modelo_processos');
    }
}
