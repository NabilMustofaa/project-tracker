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
        Schema::create('z_tmp_project_tasks', function (Blueprint $table) {
            $table->foreignId('PICId');
            $table->integer('GroupTaskNo');
            $table->integer('TaskNo');
            $table->primary(['PICId', 'TaskNo']);
            $table->string('TaskDescription');
            $table->integer('PIC');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->integer('ManDays');
            $table->integer('StartAfterTask')->nullable();
            $table->string('TrelloCardId')->nullable();
            $table->dateTime('CreateDate')->default('now()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_tmp_project_tasks');
    }
};
