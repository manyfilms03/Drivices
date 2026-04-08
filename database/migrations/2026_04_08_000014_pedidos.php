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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained();
            $table->foreignId('cupon_id')->constrained();
            $table->decimal('orcamento', 10, 2);
            $table->string('descricao');
            $table->string('foto');
            $table->boolean('emergencia');
            $table->string('disponibilidade');
            $table->date('data_preferida');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
