<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id'); // employee id
            $table->date('date');                 // attendance date
            $table->time('check_in')->nullable(); // check-in time
            $table->time('check_out')->nullable(); // check-out time
            $table->unsignedBigInteger('franchise_id')->nullable(); // optional franchise
            $table->timestamps();

            // Foreign Keys
            $table->foreign('emp_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('franchise_id')->references('id')->on('franchises')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
