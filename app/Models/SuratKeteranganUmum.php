<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeteranganUmum extends Model
{
    use HasFactory;
    //table name
    protected $table = 'tb_surat_keterangan_umum';

    //primary key
    protected $primaryKey = 'id';

    //fillable
    protected $fillable = [
        'nama_lengkap',
        'gender',
        'no_hp',
        'tempat_lahir',
        'tanggal_lahir',
        'warga_negara',
        'agama',
        'pekerjaan',
        'tempat_tinggal',
        'nik',
        'ktp',
        'surat_kk',
        'status_kawin',
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
