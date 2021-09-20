<?php

use Illuminate\Database\Seeder;
use App\job_opportunities;

class JobOpportunitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        job_opportunities::create([
            'name' => 'Backend Developer',
            'description' => 'Back end developer adalah seseorang yang memiliki spesialisasi di 
            bidang back end web development.',
        ]);

        job_opportunities::create([
            'name' => 'Frontend Developer',
            'description' => 'Front End Dev merupakan pekerjaan dimana seorang pengembang 
            website atau mobile yang bisa dilihat lamgsung oleh user.',
        ]);

        job_opportunities::create([
            'name' => 'Programer',
            'description' => 'Programmer adalah seseorang yang memiliki kemampuan atau skill menulis dan 
            merancang kode program-program (syntax).',
        ]);
    }
    
}
