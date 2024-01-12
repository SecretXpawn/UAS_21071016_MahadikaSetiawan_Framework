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
        Schema::create('nilai_mahadikas', function (Blueprint $table) {
            $table->id('id_nilai');
            $table->string('id_guru');
            $table->string('id_siswa');
            $table->string('id_kurikulum');
            $table->string('nilai_uas');
            $table->string('nilai_uts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_mahadikas');
    }
};
