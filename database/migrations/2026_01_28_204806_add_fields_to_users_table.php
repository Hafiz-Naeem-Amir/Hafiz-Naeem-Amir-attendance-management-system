<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'emp_id')) {
                $table->string('emp_id')->unique()->after('id');
            }
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable()->after('password');
            }
            if (!Schema::hasColumn('users', 'hire_date')) {
                $table->date('hire_date')->nullable()->after('phone');
            }
            if (!Schema::hasColumn('users', 'designation_id')) {
                $table->unsignedBigInteger('designation_id')->nullable()->after('hire_date');
                $table->foreign('designation_id')->references('id')->on('designations')->onDelete('set null');
            }
            if (!Schema::hasColumn('users', 'franchise_id')) {
                $table->unsignedBigInteger('franchise_id')->nullable()->after('designation_id');
                $table->foreign('franchise_id')->references('id')->on('franchises')->onDelete('set null');
            }
            if (!Schema::hasColumn('users', 'status')) {
                $table->boolean('status')->default(1)->after('franchise_id');
            }
            if (!Schema::hasColumn('users', 'profile_image')) {
                $table->string('profile_image')->nullable()->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop foreign keys first
            $table->dropForeign(['designation_id']);
            $table->dropForeign(['franchise_id']);

            $table->dropColumn([
                'emp_id',
                'phone',
                'hire_date',
                'designation_id',
                'franchise_id',
                'status',
                'profile_image'
            ]);
        });
    }
};
