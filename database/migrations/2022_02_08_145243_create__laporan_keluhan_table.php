<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKeluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_laporan_keluhan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_lengkap');
            $table->string('no_hp');
            $table->string('tempat_tinggal');
            $table->string('keluhan');
            $table->string('foto');
            $table->enum('status', ['proses', 'terjawab']);
            $table->string('catatan')->nullable();
            $table->string('kode_tiket');
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
        Schema::dropIfExists('_laporan_keluhan');
    }
}
