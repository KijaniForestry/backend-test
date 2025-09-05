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
        Schema::create('farmer_profile_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_template_field_id')->nullable();
            $table->text('value')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('farmer_template_assignment_id')->nullable();
            $table->unsignedBigInteger('attribute_value_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_profile_values');
    }
};
