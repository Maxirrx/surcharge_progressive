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
        Schema::create('workout_session', function (Blueprint $table) {
            $table->id()->primary();;
            $table->unsignedBigInteger('user_id');
            $table->foreignId('workout_id')->nullable()->constrained('workout_template');
            $table->date('dateofworkout');
            $table->integer('order')->default(1);
            $table->boolean('isfinished')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_session');
    }
};
