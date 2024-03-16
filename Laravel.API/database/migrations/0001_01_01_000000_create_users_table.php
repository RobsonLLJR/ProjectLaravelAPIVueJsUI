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
        Schema::create('Users', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Name');
            $table->string('Email')->unique();
            $table->timestamp('Email_verified_at')->nullable();
            $table->string('Password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('Password_reset_tokens', function (Blueprint $table) {
            $table->string('Email')->primary();
            $table->string('Token');
            $table->timestamp('Created_at')->nullable();
        });

        Schema::create('Sessions', function (Blueprint $table) {
            $table->string('Id')->primary();
            $table->foreignId('User_id')->nullable()->index();
            $table->string('Ip_address', 45)->nullable();
            $table->text('User_agent')->nullable();
            $table->longText('Payload');
            $table->integer('Last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Users');
        Schema::dropIfExists('Password_reset_tokens');
        Schema::dropIfExists('Sessions');
    }
};
