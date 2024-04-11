<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('current_school');
            $table->decimal('gpa', 5, 2);
            $table->decimal('family_income', 10, 2);
            $table->text('extracurricular_activities')->nullable();
            $table->text('personal_statement')->nullable();
            $table->foreignId('user_id')->constrained(); // Foreign key to users table
            $table->string('type');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applies');
    }
};
