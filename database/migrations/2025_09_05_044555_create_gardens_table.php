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
        Schema::create('gardens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->jsonb('center_point')->nullable();
            $table->timestamps();
            $table->jsonb('polygon')->nullable();
            $table->unsignedBigInteger('farmer_id');
            $table->string('status')->default('Active');
            $table->unsignedBigInteger('registered_by')->nullable();
            $table->jsonb('r_center_point')->nullable();
            $table->string('r_status')->nullable();
            $table->bigInteger('r_group_id')->nullable();
            $table->bigInteger('r_farmer_id')->nullable();
            $table->softDeletes();
            $table->bigInteger('r_id')->nullable();
            $table->date('planted_date')->nullable();
            $table->unsignedBigInteger('season_id')->nullable();
            $table->integer('r_total_trees')->nullable();
            $table->integer('tree_count')->nullable();
            $table->timestamp('tree_count_updated_at')->nullable();
            $table->jsonb('geom')->nullable();
            $table->jsonb('centroid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gardens');
    }
};
