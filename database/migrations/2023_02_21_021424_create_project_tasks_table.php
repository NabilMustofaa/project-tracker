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
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->foreignId('ProjectId');
            $table->integer('TaskNo');
            $table->primary(['ProjectId', 'TaskNo']);
            $table->foreignId('GroupTaskNo');
            $table->string('TaskDescription');
            $table->foreignId('PICId');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->integer('ManDays');
            $table->integer('StartAfterTask');
            $table->integer('Status');
            $table->dateTime('DoneAt')->nullable();
            $table->integer('StoryPoint');
            $table->string('TrelloCardCount');
            $table->dateTime('CreateDate')->default('now()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tasks');
    }
};
