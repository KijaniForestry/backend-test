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
        Schema::create('farmer_profile_template_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('template_id');
            $table->string('field_name');
            $table->string('field_type');
            $table->boolean('required')->default(false);
            $table->json('options')->nullable();
            $table->json('validation_rules')->nullable();
            $table->text('description')->nullable();
            $table->integer('display_order')->default(0);
            $table->timestamps();
            $table->string('label');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_profile_template_fields');
    }
};
