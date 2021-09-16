<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(TeacherSubjectSeeder::class);
        $this->call(JobOpportunitiesSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(DocumentationSeeder::class);
        $this->call(NewsSeeder::class);

    }
}
