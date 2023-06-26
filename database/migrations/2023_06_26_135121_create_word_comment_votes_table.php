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
        Schema::create('word_comment_votes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->constrained('users', 'id');
            $table->integer('word_comment_id')->constrained('word_comments', 'id');
            $table->boolean('isPositive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_comment_votes');
    }
};
