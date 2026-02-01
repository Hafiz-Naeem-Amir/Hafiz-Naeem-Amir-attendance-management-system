<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id')->unique();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('designation_id')->nullable();
            $table->date('hire_date')->nullable();
            $table->boolean('status')->default(1);

            // Franchise foreign key
            $table->unsignedBigInteger('franchise_id');
            $table->foreign('franchise_id')->references('id')->on('franchises')->onDelete('cascade');

            // Photo column for employee image
            $table->string('photo')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
