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
        ]);

        documentation::create([
            'name'=>'Jabon',
            'source'=>'https://www.instagram.com/smkmahaputracerdasutama/',
        ]);

        documentation::create([
            'name'=>'VIP',
            'source'=>'https://www.instagram.com/smkmahaputracerdasutama/',
        ]);
    }
}
