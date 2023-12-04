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
        Schema::create('user_childerens', function (Blueprint $table) {
            $table->id();
            $table->string('parent_id')->foreignId('user_id')->constrained()->nullabel();
            $table->string('teacher_id')->foreignId('user_id')->constrained()->nullabel();
            $table->string('Childeren_id')->foreignId('Childeren_id')->constrained()->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_childerens');
    }
};
