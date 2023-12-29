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
        Schema::create('students', function (Blueprint $table) {
            $table->string('nis')->primary();
            $table->foreignId('user_id')->constrained();
            $table->string('nisn');
            $table->string('fullname');
            $table->boolean('gender');
            $table->string('level');
            $table->text('address');
            $table->date('date_of_birth');
            $table->string('picture')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
