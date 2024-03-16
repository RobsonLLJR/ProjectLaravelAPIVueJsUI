<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\TaskStatusEnum;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Task', function (Blueprint $table) {
            $table->id('Id');
            $table->string('Title')->nullable(false);
            $table->string('Description')->nullable(false);
            $table->date('DateCreated')->nullable(false);
            $table->enum('Status', TaskStatusEnum::values())->default('Peding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Task');
    }
};
