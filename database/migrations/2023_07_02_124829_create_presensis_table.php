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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->string('id_absen');
            $table->string('id_matkul');
            $table->string('nim_mhs');
            $table->date('tanggal_absen');
            $table->integer('pertemuan');
            $table->enum('status', ['hadir', 'sakit', 'ijin', 'alpha']);
            $table->timestamps();

            $table->foreign('id_matkul')->references('kode_matkul')->on('matakuliahs');
            $table->foreign('nim_mhs')->references('nim')->on('mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensis');
    }
};
