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
        Schema::create('presensi', function (Blueprint $table) {
            $table->string('id_absen')->primary();
            $table->string('id_matkul');
            $table->string('nim_mhs');
            $table->timestamp('tanggal_absen');
            $table->enum('status', ['hadir', 'sakit', 'ijin', 'alpha']);
            $table->timestamps();

            $table->foreign('id_matkul')->references('id_matkul')->on('mata_kuliah');
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
        Schema::dropIfExists('presensi');
    }
};
