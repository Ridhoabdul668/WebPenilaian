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
        Schema::table('siswa', function (Blueprint $table) {
            $table->integer('nilai_harian')->nullable();
            $table->integer('ulangan_1')->nullable();
            $table->integer('ulangan_2')->nullable();
            $table->integer('nilai_akhir_semester')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn(['nilai_harian', 'ulangan_1', 'ulangan_2', 'nilai_akhir_semester']);
        });
    }
};
