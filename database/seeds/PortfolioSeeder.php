<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'name'  =>'Penerimaan Peserta Didik Baru',
            'source'=> 'https://github.com/Susilawatielsa/2020_XII_RPL_KELOMPOK_1',
            'photo' => 'kelompok_1_ujikom.png',
        ]);

        Portfolio::create([
            'name'  =>'Inventaris Asset SMK MAHAPUTRA',
            'source'=>'https://github.com/SantiSintia/2020_XII_RPL_KELOMPOK_2',
            'photo' => 'kelompok_2_ujikom.png',
        ]);

        Portfolio::create([
            'name'  =>'Pembuatan Jadwal SMK Mahaputra',
            'source'=>'https://github.com/RayhanSalman123/2020_XII_RPL_KELOMPOK_3',
            'photo' => 'kelompok_3_ujikom.png',
        ]);

        Portfolio::create([
            'name'  =>'Pemilihan Anggota Baru Ekstakulikuler',
            'source'=>'https://github.com/tazkiyahalika/2020_XII_RPL_KELOMPOK_4',
            'photo' => 'kelompok_4_ujikom.png',
        ]);

        Portfolio::create([
            'name'  =>'Sistem Pelanggaran',
            'source'=>'https://github.com/SintaBellaa/2020_XII_RPL_KELOMPOK_5',
            'photo' => 'kelompok_5_ujikom.png',
        ]);

        Portfolio::create([
            'name'  =>'Perpustakaan Web',
            'source'=>'https://github.com/diancitra21/2020_XII_RPL_KELOMPOK_6',
            'photo' => 'kelompok_6_ujikom.png',
        ]);

        Portfolio::create([
            'name'  =>'Tabungan Walikelas',
            'source'=>'https://github.com/yuliawatinurzanah1/Tabungan-Kelompok-7',
            'photo' => 'kelompok_7_ujikom.png',
        ]);

        Portfolio::create([
            'name'  =>'Pemilihan Osis',
            'source'=>'https://github.com/astrinur09/2020_XII_RPL_KELOMPOK_8',
            'photo' => 'kelompok_8_ujikom.png',
        ]);
    }
}
