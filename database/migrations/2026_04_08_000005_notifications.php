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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id');
            $table->date('data_envio');
            $table->string('tipo');
            $table->string('titulo');
            $table->string('conteudo');
            $table->string('status');
            $table->date('visto_em')->nullable();
            $table->string('link')->nullable();
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
