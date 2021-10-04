<?php

use App\PositionTypes;
use Illuminate\Database\Seeder;

class PositionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PositionTypes::create([
            'name' => 'Kepala Prodi',
            'is_unique' => '1'
        ]);

        PositionTypes::create([
            'name' => 'Guru RPL',
            'is_unique' => '0'
        ]);
    }
}
