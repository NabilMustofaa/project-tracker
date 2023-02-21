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
        Schema::create('project_task_by_days', function (Blueprint $table) {
            $table->foreignId('ProjectId');;
            $table->foreignId('TaskNo');
            $table->date('Date');
            $table->primary(['ProjectId', 'TaskNo', 'Date']);
            $table->smallInteger('WorkDay')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_task_by_days');
    }
};
