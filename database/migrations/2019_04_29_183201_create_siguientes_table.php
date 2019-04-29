<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiguientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siguientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('fecha');
            $table->string('hora');
            $table->string('descripcion');
            $table->string('btn_pago');
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
        Schema::dropIfExists('siguientes');
    }
}
