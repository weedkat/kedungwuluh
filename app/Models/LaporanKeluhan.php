<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKeluhan extends Model
{
    use HasFactory;

     //table name
     protected $table = 'tb_SuratKeteranganUmum';

     //primary key
     protected $primaryKey = 'id';

     //fillable
     protected $fillable = [
         'nama_lengkap',
         'no_hp',
         'tempat_tinggal',
         'keluhan',
         'foto',
         'status',
         'catatan',
         'kode_tiket',
     ];

     //id increment
     public $incrementing = true;

     //fillable
     public $timestamps = true;

}
