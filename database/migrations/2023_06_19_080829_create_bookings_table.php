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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('trip_id');
            $table->integer('car_id');
            $table->integer('driver_id');
            $table->integer('passenger_id');
            $table->string('departure');
            $table->string('destination');
            $table->decimal('fair', 18,2);
            $table->string('departure_date');
            $table->string('departure_time');
            $table->string('bags_per_person');
            $table->date('booking_date');
            $table->string('status')->default('Processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
