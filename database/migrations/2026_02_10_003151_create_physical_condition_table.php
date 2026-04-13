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
        Schema::create('physical_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('blood_type')->nullable();
            $table->string('illness')->nullable();
            $table->string('disability')->nullable();
            $table->bigInteger('height');
            $table->bigInteger('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physical_condition');
    }
};
