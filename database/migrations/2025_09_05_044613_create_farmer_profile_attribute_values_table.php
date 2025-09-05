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
        Schema::create('farmer_profile_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->unsignedBigInteger('farmer_profile_attribute_id');
            $table->text('value_string')->nullable();
            $table->decimal('value_number', 15, 2)->nullable();
            $table->date('value_date')->nullable();
            $table->boolean('value_boolean')->nullable();
            $table->json('value_json')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_profile_attribute_values');
    }
};
