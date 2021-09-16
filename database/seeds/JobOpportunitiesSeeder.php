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
            'name' => 'Hacker',
            'description' => 'Meretas Web',
        ]);

        job_opportunities::create([
            'name' => 'webdesign',
            'description' => 'Mendesign Web',
        ]);

        job_opportunities::create([
            'name' => 'Developer',
            'description' => 'Membuat Web',
        ]);
    }
    
}
