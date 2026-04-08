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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('senha')->nullable();
            $table->integer('cpf');
            $table->date('nascimento');
            $table->integer('telefone');
            $table->string('foto')->nullable();
            $table->string('tipo');
            $table->string('status')->nullable();
            $table->string('email_verificado');
            $table->string('email_codigo')->nullable();
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
