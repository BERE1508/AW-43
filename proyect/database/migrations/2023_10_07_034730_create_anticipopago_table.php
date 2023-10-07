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
        Schema::create('anticipopago', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('renta_id');
            $table->integer('monto_inicial');
            $table->string('forma_pago');
            $table->date('fecha_anticipo');
            $table->date('fecha_limite');
            $table->timestamps();
            $table->foreign('renta_id')->references('id')->on('renta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anticipopago');
    }
};
