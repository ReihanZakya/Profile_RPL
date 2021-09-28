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
            'photo' => 'penerimaan.png',
        ]);

        Portfolio::create([
            'name'  =>'Inventaris Asset SMK MAHAPUTRA',
            'source'=>'https://github.com/SantiSintia/2020_XII_RPL_KELOMPOK_2',
            'photo' => 'inventaris.png',
        ]);

        Portfolio::create([
            'name'  =>'Pembuatan Jadwal SMK Mahaputra',
            'source'=>'https://github.com/RayhanSalman123/2020_XII_RPL_KELOMPOK_3',
            'photo' => 'jadwal.png',
        ]);
    }
}
