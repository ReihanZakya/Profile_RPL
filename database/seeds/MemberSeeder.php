<?php

use App\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            'name' => 'Deden',
            'group' => '1'
        ]);

        Member::create([
            'name' => 'Reihan',
            'group' => '2'
        ]);

        Member::create([
            'name' => 'Luqman',
            'group' => '3'
        ]);
    }
}
