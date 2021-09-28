<?php

use App\PortfolioMember;
use Illuminate\Database\Seeder;

class PortfolioMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioMember::create([
            'portfolio_id' => '1',
            'member_id' => '1'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '1',
            'member_id' => '2'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '1',
            'member_id' => '3'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '1',
            'member_id' => '4'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '1',
            'member_id' => '5'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '2',
            'member_id' => '6'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '2',
            'member_id' => '7'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '2',
            'member_id' => '8'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '2',
            'member_id' => '9'
        ]);

        PortfolioMember::create([
            'portfolio_id' => '2',
            'member_id' => '10'
        ]);
    }
}
