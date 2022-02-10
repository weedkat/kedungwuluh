<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPengantarCatatanKepolisian extends Model
{
    use HasFactory;

     //table name
     protected $table = 'tb_SuratPengantarCatatanKepolisian';

     //primary key
     protected $primaryKey = 'id';

     //fillable
     protected $fillable = [
         'nama_lengkap',
         'no_hp',
         'tempat_lahir',
         'tanggal_lahir',
         'warga_negara',
         'agama',
         'status_kawin',
         'pekerjaan',
         'tempat_tinggal',
         'nik',
         'ktp',
         'surat_keterangan',
         'keperluan',
         'status',
         'keterangan_lain',
         'catatan',
         'kode_tiket',
     ];

     //id increment
     public $incrementing = true;

     //fillable
     public $timestamps = true;
}
