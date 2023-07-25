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
        Schema::create('pelaksanaans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pelaksanaan')->unique();
            $table->string('semester_mhs');
            $table->string('kelas_mhs');
            $table->string('jumlah_mhs');
            $table->string('ruangan');
            $table->enum('prodi', ['Teknik Informatika', 'Teknik Listrik', 'SIKC']);
            $table->string('pengawas');
            $table->date('tgl_pelaksanaan');
            $table->string('kegiatan');
            $table->string('validasi_pengawas');
            $table->string('validasi_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelaksanaans');
    }
};
