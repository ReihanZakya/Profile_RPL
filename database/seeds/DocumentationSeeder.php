<?php

use Illuminate\Database\Seeder;
use App\documentation;

class DocumentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        documentation::create([
            'name'=>'Gerbang masuk',
            'source'=>'https://www.instagram.com/smkmahaputracerdasutama/',
            'photo' => 'gerbang.png'
        ]);

        documentation::create([
            'name'=>'Jabon',
            'source'=>'https://www.instagram.com/smkmahaputracerdasutama/',
            'photo' => 'jabon.png'
        ]);

        documentation::create([
            'name'=>'Balema',
            'source'=>'https://www.instagram.com/smkmahaputracerdasutama/',
            'photo' => 'balema.png'
        ]);
    }
}
