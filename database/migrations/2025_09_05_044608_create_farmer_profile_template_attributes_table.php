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
        Schema::create('farmer_profile_template_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('template_id');
            $table->unsignedBigInteger('attribute_id');
            $table->boolean('is_required')->default(false);
            $table->integer('display_order')->default(0);
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_profile_template_attributes');
    }
};
