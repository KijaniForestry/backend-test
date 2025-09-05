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
        Schema::create('farmer_profile_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('data_type_id')->nullable();
            $table->json('validation')->nullable();
            $table->string('reference_model')->nullable();
            $table->string('display_field')->nullable();
            $table->string('value_field')->nullable();
            $table->json('additional_fields')->nullable();
            $table->string('ui_component')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_profile_attributes');
    }
};
