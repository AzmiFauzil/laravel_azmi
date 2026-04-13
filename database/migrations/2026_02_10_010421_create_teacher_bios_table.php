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
        Schema::create('teacher_bios', function (Blueprint $table) {
            $table->id();
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('religion');
            $table->string('married_status');
            $table->string('telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_bios');
    }
};
