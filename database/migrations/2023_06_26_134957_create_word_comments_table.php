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
        Schema::create('word_comments', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->integer('language_id')->constrained('languages', 'id');
            $table->integer('creator_id')->constrained('users', 'id');
            $table->integer('word_id')->constrained('words', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_comments');
    }
};
