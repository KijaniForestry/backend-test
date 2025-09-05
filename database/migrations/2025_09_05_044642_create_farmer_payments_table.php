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
        Schema::create('farmer_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->unsignedBigInteger('farmer_group_id')->nullable();
            $table->string('status')->default('Pending');
            $table->decimal('amount', 10, 2);
            $table->string('mobile_money_phone')->nullable();
            $table->string('payment_method')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_payments');
    }
};
