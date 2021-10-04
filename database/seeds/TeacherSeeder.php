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
            'photo' => 'pa_raynaldi.jpg',
            'position_types_id' => '1'
        ]);

        Teacher::create([
            'name' => 'Dede Suryana, A.md',
            'gender' => '1',
            'photo' => 'pa_dede.jpg',
            'position_types_id' => '2'
        ]);

        Teacher::create([
            'name' => 'Hannif Kurniawan Muttaqin, S.T, M.T',
            'gender' => '1',
            'photo' => 'pa_hannif.jpg',
            'position_types_id' => '2'
        ]);

        Teacher::create([
            'name' => 'Mujahid Munir Muttaqin, S.T',
            'gender' => '1',
            'photo' => 'pa_munir.jpg',
            'position_types_id' => '2'
        ]);

        Teacher::create([
            'name' => 'Shyffa Ilmalia Noer Fadillah, S.Kom',
            'gender' => '2',
            'photo' => 'bu_shyffa.jpg',
            'position_types_id' => '2'
        ]);


    }
}
