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
        Schema::create('portifolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->constrained();
            $table->string('biografia');
            $table->string('ensino');
            $table->string('cursos')->nullable();
            $table->string('experiencia')->nullable();
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
