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
            'class' => 'Kelas X'
        ]);

        Subject::create([
            'name' => 'Pemodelan Perangkat Lunak',
            'class' => 'Kelas XI'
        ]);

        Subject::create([
            'name' => 'Pemograman Web dan Perangkat Bergerak',
            'class' => 'Kelas XI'
        ]);
    }
}
