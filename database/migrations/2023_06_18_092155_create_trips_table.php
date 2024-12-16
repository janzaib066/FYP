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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('car_id');
            $table->string('departure');
            $table->string('destination');
            $table->string('seats');
            $table->string('fair_per_seat');
            $table->string('departure_date');
            $table->string('departure_time');
            $table->string('bags_per_person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
