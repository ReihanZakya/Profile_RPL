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
        ]);

        Member::create([
            'member_name' => 'Ahmad Suherman',
        ]);

        Member::create([
            'member_name' => 'Dede Suminar',
        ]);

        Member::create([
            'member_name' => 'Elsa Susilawati',
        ]);

        Member::create([
            'member_name' => 'Sumiartini Sri Rahayu',
        ]);

        Member::create([
            'member_name' => 'Taupik P',
        ]);

        Member::create([
            'member_name' => 'Santi Sintia Wati',
        ]);

        Member::create([
            'member_name' => 'Candra',
        ]);

        Member::create([
            'member_name' => 'Nadira Nurul D',
        ]);

        Member::create([
            'member_name' => 'Rinaldi Anugrah P',
        ]);
    }
}
