<?php

use App\TeacherSubject;
use Illuminate\Database\Seeder;

class TeacherSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherSubject::create([
            'teacher_id' => '1',
            'subject_id' => '1'
        ]);

        TeacherSubject::create([
            'teacher_id' => '2',
            'subject_id' => '2'
        ]);

        TeacherSubject::create([
            'teacher_id' => '3',
            'subject_id' => '3'
        ]);
    }
}
