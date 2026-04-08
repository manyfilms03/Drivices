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
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained();
            $table->foreignId('denunciado_id')->constrained('usuarios', 'id');
            $table->string('categoria');
            $table->string('motivo');
            $table->string('comentario');
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
