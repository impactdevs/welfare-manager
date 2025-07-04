<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->uuid('training_id')->primary();
            $table->string('training_title');
            $table->longText('training_description');
            $table->string('training_location');
            $table->date('training_start_date');
            $table->date('training_end_date');
            $table->json('training_category')->nullable();
            $table->json('leave_request_status')->nullable();
            $table->longText('rejection_reason')->nullable();
            $table->uuid('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
