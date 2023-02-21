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
        Schema::create('project_task_trello_cards', function (Blueprint $table) {
            $table->string('TrelloCardId')->primary();
            $table->foreignId('ProjectId');;
            $table->foreignId('TaskNo');
            $table->string('Name');
            $table->integer('StoryPoint');
            $table->dateTime('DueDate')->nullable();
            $table->boolean('DueComplete');
            $table->dateTime('ToDo')->nullable();
            $table->dateTime('Doing')->nullable();
            $table->dateTime('Review')->nullable();
            $table->dateTime('Done')->nullable();
            $table->integer('FinalStatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_task_trello_cards');
    }
};
