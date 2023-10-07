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
        Schema::create('inmueble', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('stainmueble_id');
            $table->string('tipo');
            $table->string('descripcion');
            $table->integer('costo');
            $table->string('calle');
            $table->string('color');
            $table->timestamps();
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade');
            $table->foreign('stainmueble_id')->references('id')->on('stainmueble')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueble');
    }
};
