<?php

use Illuminate\Database\Seeder;
use App\JobOpportunities;

class JobOpportunitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobOpportunities::create([
            'name' => 'Backend Developer',
            'description' => 'Back end developer adalah seseorang yang memiliki spesialisasi di
            bidang back end web development.',
        ]);

        JobOpportunities::create([
            'name' => 'Frontend Developer',
            'description' => 'Front End Dev merupakan pekerjaan dimana seorang pengembang
            website atau mobile yang bisa dilihat lamgsung oleh user.',
        ]);

        JobOpportunities::create([
            'name' => 'Programer',
            'description' => 'Programmer adalah seseorang yang memiliki kemampuan atau skill menulis dan
            merancang kode program-program (syntax).',
        ]);
    }

}
