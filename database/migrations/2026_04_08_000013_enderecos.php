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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained();
            $table->integer('cep');
            $table->string('logradouro');
            $table->string('complemento')->nullable();
            $table->string('unidade');
            $table->string('bairro');
            $table->string('localidade');
            $table->string('uf');
            $table->string('regiao');
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
