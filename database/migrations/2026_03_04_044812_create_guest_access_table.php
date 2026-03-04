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
        Schema::create('guest_access', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('bill_id')->constrained('bills')->onDelete('cascade');
            $table->date('access_date');
            $table->integer('minutes_used')->default(0);
            $table->unique(['guest_id', 'bill_id', 'access_date'], 'unique_guest_daily');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_access');
    }
};