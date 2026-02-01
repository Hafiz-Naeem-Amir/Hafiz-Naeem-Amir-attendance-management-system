<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('emp_id');
            $table->unsignedBigInteger('franchise_id');

            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');

            $table->text('reason')->nullable();
            $table->integer('days')->nullable();

            $table->timestamps();

            // Foreign Keys
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('franchise_id')->references('id')->on('franchises')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
