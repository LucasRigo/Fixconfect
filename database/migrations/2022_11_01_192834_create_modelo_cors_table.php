<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeloCorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_cors', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('modelo_id')->unsigned()->nullable();
            $table->foreign('modelo_id')->references('id')->on('modelos');

            $table->bigInteger('cor_id')->unsigned()->nullable();
            $table->foreign('cor_id')->references('id')->on('cors');


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
        Schema::dropIfExists('modelo_cors');
    }
}
