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
        Schema::create('translation_votes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->constrained('users', 'id');
            $table->integer('translation_id')->constrained('translations', 'id');
            $table->boolean('ispositive');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translation_votes');
    }
};
