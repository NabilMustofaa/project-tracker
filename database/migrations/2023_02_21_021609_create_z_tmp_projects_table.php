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
        Schema::create('z_tmp_projects', function (Blueprint $table) {
            $table->id('PICId');
            $table->string('Description');
            $table->string('ProjectGroup')->nullable();
            $table->string('TrelloBoardId')->nullable();
            $table->boolean('SaturdayIsWorkDay');
            $table->dateTime('CreateDate')->default('now()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_tmp_projects');
    }
};
