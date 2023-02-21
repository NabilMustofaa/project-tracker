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
        Schema::create('z_tmp_project_task_detailed_by_days', function (Blueprint $table) {
            $table->foreignId('PICId');
            $table->foreignId('TaskNo');
            $table->date('Date');
            $table->primary(['PICId', 'TaskNo', 'Date']);
            $table->smallInteger('WorkDay');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_tmp_project_task_detailed_by_days');
    }
};
