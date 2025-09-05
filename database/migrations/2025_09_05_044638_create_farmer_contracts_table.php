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
        Schema::create('farmer_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('farmer_id');
            $table->unsignedBigInteger('garden_id');
            $table->string('land_owner_first_name')->nullable();
            $table->string('land_owner_last_name')->nullable();
            $table->string('land_owner_other_name')->nullable();
            $table->string('beneficiary_first_name')->nullable();
            $table->string('beneficiary_last_name')->nullable();
            $table->string('witness_name')->nullable();
            $table->json('photos')->nullable();
            $table->date('sign_date')->nullable();
            $table->date('contract_end')->nullable();
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_contracts');
    }
};
