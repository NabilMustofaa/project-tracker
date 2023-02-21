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
        Schema::create('person_in_charges', function (Blueprint $table) {
            $table->id('PICId');
            $table->string('Name');
            $table->string('Role');
            $table->string('UserLogin')->nullable();
            $table->boolean('CanSeeAllProjects')->default(false);
            $table->string('Trello_UserId')->nullable();
            $table->string('Trello_UserName')->nullable();
            $table->dateTime('CreateDate')->default('now()');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_in_charges');
    }
};
