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
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->integer('status_id')->constrained('word_statuses', 'id');
            $table->string('word', 20);
            $table->integer('language_id')->constrained('languages', 'id');
            $table->string('phonetic', 20);
            $table->integer('creator_id')->constrained('users', 'id');
            $table->timestamps();
            
            $table->unique(['word', 'language_id']); //TODO check if its really unique
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
