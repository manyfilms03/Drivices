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
        Schema::create('professional_profession', function (Blueprint $table) {
            $table->foreignId('professional_id')->constrained();
            $table->foreignId('profession_id')->constrained();
            $table->primary(['professional_id', 'profession_id']);
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
