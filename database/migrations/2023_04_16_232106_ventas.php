<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->float('monto');
            // $table->integer('tipoDePago')->unsigned(); 
            $table->date('fecha');
            $table->integer('tipoUsuario');
            // $table->integer('empleado')->unsigned();
            $table->foreignId('tipoDePago')->constrained('tiposDePago'); 


            // $table->integer('tipoDePago')->references('id')->on('tiposDePago');
            // $table->integer('empleado')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');

    }
};
