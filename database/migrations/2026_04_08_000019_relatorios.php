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
        Schema::create('relatorios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('servico_id')->constrained();
            $table->string('status');
            $table->string('relatorio_profissional');
            $table->string('relatorio_usuario');
            $table->string('problema')->nullable();
            $table->string('descricao_problema')->nullable();
            $table->decimal('custos_adicionais', 10, 2)->nullable();
            $table->string('validacao_cliente')->nullable();
            $table->string('foto_antes');
            $table->string('foto_depois');
            $table->timestamps();
            
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
