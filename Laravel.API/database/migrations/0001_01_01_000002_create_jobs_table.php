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
        Schema::create('Jobs', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Queue')->index();
            $table->longText('Payload');
            $table->unsignedTinyInteger('Attempts');
            $table->unsignedInteger('Reserved_at')->nullable();
            $table->unsignedInteger('Available_at');
            $table->unsignedInteger('Created_at');
        });

        Schema::create('Job_batches', function (Blueprint $table) {
            $table->string('Id')->primary();
            $table->string('Name');
            $table->integer('Total_jobs');
            $table->integer('Pending_jobs');
            $table->integer('Failed_jobs');
            $table->longText('Failed_job_ids');
            $table->mediumText('Options')->nullable();
            $table->integer('Cancelled_at')->nullable();
            $table->integer('Created_at');
            $table->integer('Finished_at')->nullable();
        });

        Schema::create('Failed_jobs', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Uuid')->unique();
            $table->text('Connection');
            $table->text('Queue');
            $table->longText('Payload');
            $table->longText('Exception');
            $table->timestamp('Failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Jobs');
        Schema::dropIfExists('Job_batches');
        Schema::dropIfExists('Failed_jobs');
    }
};
