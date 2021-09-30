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
            'name' => 'Raynaldi Syahputra Nonci, S.Pd',
            'gender' => '1',
            'position_types' => '1',
            'photo' => 'pa_raynaldi.jpg',
            'is_unique' => '1'
        ]);

        Teacher::create([
            'name' => 'Dede Suryana, A.md',
            'gender' => '1',
            'position_types' => '2',
            'photo' => 'pa_dede.jpg'
        ]);

        Teacher::create([
            'name' => 'Hannif Kurniawan Muttaqin, S.T, M.T',
            'gender' => '1',
            'position_types' => '2',
            'photo' => 'pa_hannif.jpg'
        ]);

        Teacher::create([
            'name' => 'Mujahid Munir Muttaqin, S.T',
            'gender' => '1',
            'position_types' => '2',
            'photo' => 'pa_munir.jpg'
        ]);

        Teacher::create([
            'name' => 'Shyffa Ilmalia Noer Fadillah, S.Kom',
            'gender' => '1',
            'position_types' => '2',
            'photo' => 'bu_shyffa.jpg'
        ]);


    }
}
