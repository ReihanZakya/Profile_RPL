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
            'name' => 'Basdat',
            'class' => 'Kelas X'
        ]);

        Subject::create([
            'name' => 'PDKK',
            'class' => 'Kelas XI'
        ]);

        Subject::create([
            'name' => 'PWPB',
            'class' => 'Kelas XI'
        ]);
    }
}
