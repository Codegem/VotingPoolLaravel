<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Voting;
use App\Models\Pool;

class VotingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voting::truncate();
        DB::table('votings')->truncate();
   
        Voting::create([
            'user_id' => '2',
            'title' => 'Seeded1',
            'answers' => '["pimas1", "antras1", "trecias1"]',
        ]);
        Voting::create([
            'user_id' => '3',
            'title' => 'Seeded2',
            'answers' => '["pimas2", "antras2", "trecias2"]',
        ]);
        Voting::create([
            'user_id' => '2',
            'title' => 'Seeded3',
            'answers' => '["pimas3", "antras3", "trecias3"]',
        ]);


    }
}
