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
            'member_name' => 'Rendy Josua Hutagaol',
            'unique' => null
        ]);

        Member::create([
            'member_name' => 'Ahmad Suherman',
            'unique' => null
        ]);

        Member::create([
            'member_name' => 'Dede Suminar',
            'unique' => null
        ]);

        Member::create([
            'member_name' => 'Elsa Susilawati',
            'unique' => null
        ]);

        Member::create([
            'member_name' => 'Sumiartini Sri Rahayu',
            'unique' => null
        ]);
    }
}
