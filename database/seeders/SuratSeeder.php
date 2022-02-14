<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $gender = ['laki-laki','perempuan'];
        $agama = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Khonghucu'];
        $kawin = ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'];
        $pekerjaan = ['Tidak Bekerja', 'Pensiun', 'Pelajar', 'PNS', 'Mengurus Rumah Tangga', 'Karyawan Swasta', 'Buruh', 'Nelayan', 'Peternak'];
        //sku
        for($i=0; $i<10; $i++){
            DB::table('tb_surat_keterangan_umum')->insert([
                'nama_lengkap' => $faker->name,
                'gender' => Arr::random($gender),
                'no_hp' => $faker->numerify('############'),
                'tempat_lahir' => 'Banyumas',
                'tanggal_lahir' => $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-10 years', $timezone = null),
                'warga_negara' => 'Indonesia',
                'agama' => Arr::random($agama),
                'pekerjaan' => Arr::random($pekerjaan),
                'tempat_tinggal' => 'RW'.rand(1,7).'/RT'.rand(1,10),
                'nik' => $faker->numerify('################'),
                'status_kawin' => Arr::random($kawin),
                'keperluan' => 'membuat SKU',
                'status' => 'proses',
                'keterangan_lain' => '-',
                'kode_tiket' => 'SKU'.$faker->numerify('#######'),
            ]);
        }
    }
}
