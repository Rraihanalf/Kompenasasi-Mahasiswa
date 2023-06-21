<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompensasi', function (Blueprint $table) {
            $table->string('id_kompensasi')->primary();
            $table->string('nim_mhs');
            $table->string('id_presensi');
            $table->string('id_kgtan');
            $table->string('id_ruang');
            $table->string('total_jam');

            $table->timestamps();
            $table->foreign('id_presensi')->references('id_absensi')->on('presensi');
            $table->foreign('id_kgtan')->references('id_kegiatan')->on('kegiatan');
            $table->foreign('id_ruang')->references('id_ruangan')->on('ruangan');
            $table->foreign('nim_mhs')->references('nim')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompensasi');
    }
};
