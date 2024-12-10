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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained();
            $table->foreignId('siswa_id')->constrained();
            $table->foreignId('periode_id')->constrained();
            $table->foreignId('guru_id')->constrained();
            $table->foreignId('mata_pelajaran_id')->constrained();
            $table->foreignId('kategori_id')->constrained();
            $table->unsignedDouble('nilai', false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
