<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeteranganUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_surat_keterangan_umum', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_lengkap');
            $table->string('no_hp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('warga_negara');
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Khonghucu']);
            $table->string('pekerjaan');
            $table->string('tempat_tinggal');
            $table->string('nik');
            $table->string('ktp');
            $table->string('surat_kk');
            $table->enum('status_kawin', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('keperluan');
            $table->enum('status', ['proses', 'selesai', 'perbaiki']);
            $table->string('keterangan_lain')->nullable();
            $table->string('catatan')->nullable();
            $table->string('kode_tiket')->nullable();
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
        Schema::dropIfExists('tb_surat_keterangan_umum');
    }
}
