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
        Schema::create('project_change_notes', function (Blueprint $table) {
            $table->foreignId('ProjectId');
            $table->date('Date');  
            $table->primary(['ProjectId', 'Date']);
            $table->text('Note');
            $table->dateTime('CreateDate')->default('now()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_change_notes');
    }
};
