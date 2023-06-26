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
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->integer('first_word_id')->constrained('words', 'id');
            $table->integer('second_word_id')->constrained('words', 'id');
            $table->timestamps();

            $table->unique(['first_word_id', 'second_word_id']); //TODO check if its really unique
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
