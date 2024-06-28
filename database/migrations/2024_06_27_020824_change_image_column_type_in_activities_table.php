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
        Schema::table('activities', function (Blueprint $table) {
            // Mengubah tipe data kolom image menjadi string (varchar)
            $table->string('image')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            // Mengembalikan tipe data kolom image ke tipe data sebelumnya
            // Asumsikan sebelumnya adalah `text`. Sesuaikan dengan tipe data asli jika berbeda.
            $table->text('image')->change();
        });
    }
};
