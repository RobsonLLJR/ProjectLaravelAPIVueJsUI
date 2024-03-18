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
        Schema::create('Personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('Tokenable');
            $table->string('Name');
            $table->string('Token', 64)->unique();
            $table->text('Abilities')->nullable();
            $table->timestamp('Last_used_at')->nullable();
            $table->timestamp('Expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Personal_access_tokens');
    }
};
