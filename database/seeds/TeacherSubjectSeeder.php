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
            'teacher_id' => '1',
            'subject_id' => '6'
        ]);

        TeacherSubject::create([
            'teacher_id' => '1',
            'subject_id' => '11'
        ]);

        TeacherSubject::create([
            'teacher_id' => '2',
            'subject_id' => '4'
        ]);

        TeacherSubject::create([
            'teacher_id' => '2',
            'subject_id' => '5'
        ]);

        TeacherSubject::create([
            'teacher_id' => '2',
            'subject_id' => '8'
        ]);

        TeacherSubject::create([
            'teacher_id' => '2',
            'subject_id' => '9'
        ]);

        TeacherSubject::create([
            'teacher_id' => '3',
            'subject_id' => '10'
        ]);

        TeacherSubject::create([
            'teacher_id' => '3',
            'subject_id' => '13'
        ]);

        TeacherSubject::create([
            'teacher_id' => '4',
            'subject_id' => '7'
        ]);

        TeacherSubject::create([
            'teacher_id' => '4',
            'subject_id' => '12'
        ]);

        TeacherSubject::create([
            'teacher_id' => '5',
            'subject_id' => '2'
        ]);

        TeacherSubject::create([
            'teacher_id' => '5',
            'subject_id' => '3'
        ]);
    }
}
