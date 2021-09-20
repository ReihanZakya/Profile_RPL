<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name' => 'Pemograman Dasar',
            'class' => '1'
        ]);

        Subject::create([
            'name' => 'Pemodelan Perangkat Lunak',
            'class' => '2'
        ]);

        Subject::create([
            'name' => 'Pemograman Web dan Perangkat Bergerak',
            'class' => '3'
        ]);
    }
}
