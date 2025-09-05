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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registered_by_id')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('potential_farmer_id')->nullable();
            $table->boolean('is_institution')->default(false);
            $table->string('farmer_photo')->nullable();
            $table->string('gender')->nullable();
            $table->string('status')->default('Pending');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('phone2')->nullable();
            $table->boolean('has_national_id')->default(false);
            $table->bigInteger('r_group_id')->nullable();
            $table->bigInteger('r_pc_id')->nullable();
            $table->bigInteger('r_farmer_id')->nullable();
            $table->date('registered_date')->nullable();
            $table->bigInteger('r_registered_by')->nullable();
            $table->softDeletes();
            $table->string('r_phone')->nullable();
            $table->date('dob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
