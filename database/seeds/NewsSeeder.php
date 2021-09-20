<?php

use Illuminate\Database\Seeder;
use App\news;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        news::create([
            'title'=>'Apa itu SUNBURST?',
            'content'=>'APA ITU SUNBURST?, Salah satu peretasan terbesar
            dalam sejarah yang membobol kementrian
            penting di Amerika Serikat.',
            'photo' => 'sunburst.png'
        ]);

        news::create([
            'title'=>'Bulan-bulanan RI ditangan peretas.',
            'content'=>'Peretasan di berbagai instansi milik pemerintah belakangan
            marak terjadi. Tak tanggung-tanggung, hacker membobol
            hingga ratusan juta data penduduk Indonesia.',
            'photo' => 'hacker4.png'
        ]);

        news::create([
            'title'=>'Hacker China membobol BNI.',
            'content'=>'peretas atau hacker asal China menggunakan private ransomware
            bernama Thanos.',
            'photo' => 'hacker3.png'
        ]);
    }
}
