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
        Schema::create('detalle-ventas', function (Blueprint $table) {
           
            // $table->id()->unisgned();
            // $table->integer('alimento')->unsigned();
            $table->integer('cantidad');
            $table->float('granTotal');
            $table->foreignId('id')->constrained('ventas'); 
            $table->foreignId('alimento')->constrained('alimentos'); 

            // $table->integer('id')->references('id')->on('ventas');
            // $table->integer('alimento')->references('id')->on('alimentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle-ventas');

    }
};
