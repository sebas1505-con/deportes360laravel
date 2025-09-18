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
        Schema::create('detalle_venta_productos', function (Blueprint $table) {
            $table->id();
            $table->date('cantidad_producto');
            $table->date('subtotal');
            $table->date('descuento');
            $table->date('fecha_inicio_descuento');
            $table->date('fecha_fin_descuento');
            $table->foreignId('fk_id_venta')->references('id')->on('ventas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_venta_productos');
    }
};
