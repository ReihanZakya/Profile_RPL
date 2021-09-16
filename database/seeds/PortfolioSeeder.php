<?php

use Illuminate\Database\Seeder;
use App\portfolios;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        portfolios::create([
            'name'=>'Tabungan wali kelas',
            'source'=>'https://github.com/yuliawatinurzanah1/Tabungan-Kelompok-7',
        ]);

        portfolios::create([
            'name'=>'Perpustakaan',
            'source'=>'https://github.com/diancitra21/2020_XII_RPL_KELOMPOK_6.git',
        ]);

        portfolios::create([
            'name'=>'Pemilihan Osis',
            'source'=>'https://github.com/astrinur09/2020_XII_RPL_2_KELOMPOK_8.git',
        ]);
    }
}
