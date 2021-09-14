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
    }
}
