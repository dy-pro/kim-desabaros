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
        Schema::table('communities', function (Blueprint $table) {
            Schema::table('communities', function (Blueprint $table) {
                $table->string('address')->nullable()->change();
                $table->string('logo')->nullable()->change();
                $table->string('description')->nullable()->change();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->string('address')->nullable(false)->change();
            $table->string('logo')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
        });
    }
};
