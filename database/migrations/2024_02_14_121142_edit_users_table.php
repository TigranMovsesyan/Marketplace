<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function ($table) {
            $table->string('surname')->after('name');
            $table->string('address')->nullable()->after('email');
            $table->string('country')->nullable()->after('email');
            $table->date('birthday')->nullable()->after('email');
            $table->string('phone')->nullable()->after('email');
            $table->string('role')->after('email');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('role');
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('birthday');
            $table->dropColumn('country');
            $table->dropColumn('address');
            $table->dropColumn('deleted_at');
        });
    }
};
