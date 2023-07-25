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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs');
            $table->string('nim')->unique();
            $table->string('email')->unique();
            $table->string('semester');
            $table->string('kelas');
            $table->string('jurusan')->default('Teknik Elektro');
            $table->string('prodi')->default('Teknik Informatika');
            $table->string('alamat');
            $table->string('no_hp_mhs');

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
        Schema::dropIfExists('mahasiswas');
    }
};
