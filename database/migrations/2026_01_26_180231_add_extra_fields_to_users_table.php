<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('designation_id')->nullable()->after('password');
            $table->tinyInteger('status')->default(1)->after('designation_id');
            $table->text('roles')->nullable()->after('status'); // comma-separated roles
            $table->string('profile_image')->nullable()->after('roles');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['designation_id', 'status', 'roles', 'profile_image']);
        });
    }
};
