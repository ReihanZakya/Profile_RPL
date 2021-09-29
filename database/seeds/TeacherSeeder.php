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
            'name' => 'Raynaldi',
            'gender' => '1',
            'position_types' => '1',
            'photo' => 'pa rey.jpg',
            'is_unique' => '1'
        ]);

        Teacher::create([
            'name' => 'Dede',
            'gender' => '1',
            'position_types' => '2',
            'photo' => 'pa dede.jpg'
        ]);

        Teacher::create([
            'name' => 'Shyffa',
            'gender' => '2',
            'position_types' => '2',
            'photo' => 'bu syifa.jpg'
        ]);


    }
}
