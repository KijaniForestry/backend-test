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
        Schema::create('farmer_template_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->unsignedBigInteger('template_id');
            $table->timestamp('assigned_at')->nullable();
            $table->unsignedBigInteger('assigned_by')->nullable();
            $table->string('profile_template_status')->default('Pending');
            $table->unsignedBigInteger('season_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_template_assignments');
    }
};
