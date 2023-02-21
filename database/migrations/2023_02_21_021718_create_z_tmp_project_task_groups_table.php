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
        Schema::create('z_tmp_project_task_groups', function (Blueprint $table) {
            $table->foreignId('PICId');
            $table->integer('No');
            $table->primary(['PICId', 'No']);
            $table->string('Description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_tmp_project_task_groups');
    }
};
