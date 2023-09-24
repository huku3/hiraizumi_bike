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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_count');
            $table->string('start_time');
            $table->string('name');
            $table->string('name_kana');
            $table->string('post_code');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->string('tel_number');
            $table->string('email');
            $table->integer('price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
