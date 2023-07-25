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
        Schema::create('kompensasis', function (Blueprint $table) {
            $table->id();
            $table->string('id_kompen');
            $table->string('nim_mhs')->unique();
            // $table->string('total_alpha');
            $table->string('total_jam');
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
        Schema::dropIfExists('kompensasis');
    }
};
