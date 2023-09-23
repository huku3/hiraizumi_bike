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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('rental_bike_1');
            $table->string('rental_bike_2');
            $table->string('rental_bike_3');
            $table->string('rental_bike_4');
            $table->string('rental_bike_5');
            $table->string('rental_fee_1');
            $table->string('rental_fee_2');
            $table->string('rental_fee_3');
            $table->string('rental_fee_4');
            $table->string('rental_fee_5');
            $table->string('rental_start_time');
            $table->foreignId('customer_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('bike_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
