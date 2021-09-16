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
            'content'=>'Penjelasan SUNBURST.',
        ]);

        news::create([
            'title'=>'Bulan-bulanan RI ditangan peretas.',
            'content'=>'Dijadikannya RI Bulan-bulanan Peretas',
        ]);

        news::create([
            'title'=>'Hacker China membobol BNI.',
            'content'=>'Dicurigai Hacker China Meretas BNI',
        ]);
    }
}
