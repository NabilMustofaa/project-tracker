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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('ProjectId');
            $table->foreignId('PICId');
            $table->string('ProjectGroup')->nullable();
            $table->string('TrelloBoardId')->nullable();
            $table->boolean('SaturdayIsWorkday')->default(false);
            $table->boolean('Closed')->default(false);
            $table->string('UniqueId')->unique();
            $table->dateTime('CreateDate')->default('now()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
