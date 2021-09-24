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
        //KELAS X
        Subject::create([
            'name' => 'Pemrograman Dasar',
            'class' => '1'
        ]);

        Subject::create([
            'name' => 'Simulasi Digital',
            'class' => '1'
        ]);

        Subject::create([
            'name' => 'Sistem Kompter',
            'class' => '1'
        ]);

        Subject::create([
            'name' => 'Teknik Komputer dan Jaringan',
            'class' => '1'
        ]);

        //KELAS XI
        Subject::create([
            'name' => 'Basis Data',
            'class' => '2'
        ]);

        Subject::create([
            'name' => 'Pemrograman Berorientasi Objek',
            'class' => '2'
        ]);

        Subject::create([
            'name' => 'Pemrograman Web dan Perangkat Bergerak',
            'class' => '2'
        ]);

        Subject::create([
            'name' => 'Pemodelan Perangkat Lunak',
            'class' => '2'
        ]);

        Subject::create([
            'name' => 'Produk Kreatif dan Kewirausahaan',
            'class' => '2'
        ]);

        //KELAS XII
        Subject::create([
            'name' => 'Basis Data',
            'class' => '3'
        ]);

        Subject::create([
            'name' => 'Pemrograman Berorientasi Objek',
            'class' => '3'
        ]);

        Subject::create([
            'name' => 'Pemrograman Web dan Perangkat Bergerak',
            'class' => '3'
        ]);

        Subject::create([
            'name' => 'Produk Kreatif dan Kewirausahaan',
            'class' => '3'
        ]);


    }
}
