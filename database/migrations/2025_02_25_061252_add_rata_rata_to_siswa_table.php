<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->decimal('rata_rata', 5, 2)->nullable()->after('nilai_akhir_semester');
        });
    }

    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn('rata_rata');
        });
    }
};
