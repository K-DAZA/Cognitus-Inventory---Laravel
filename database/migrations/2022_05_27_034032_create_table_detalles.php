<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->id('codigo_producto')->index();
            $table->integer('id_movimiento')->references('id_movimiento')->on('movimientos'); /*-- ASIGNANDO LA CLAVE FORANEA*/
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->integer('cantidad');
            $table->integer('valor_unitario');
            $table->integer('valor_total');
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
        Schema::dropIfExists('detalles');
    }
};
