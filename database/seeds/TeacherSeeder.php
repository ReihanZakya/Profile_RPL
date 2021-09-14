<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'teacher_name' => 'Raynaldi',
            'gender' => 'Laki-laki',
            'position_types' => 'Kepala Prodi'
        ]);
    }
}
