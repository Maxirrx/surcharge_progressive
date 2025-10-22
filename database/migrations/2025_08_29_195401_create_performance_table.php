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
        Schema::create('performance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_id')->nullable()->constrained('workout_session');
            $table->foreignId('exercices_id')->constrained('exercices');
            $table->integer('numero_series');
            $table->double('poids');
            $table->integer('nb_repetition');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance');
    }
};
