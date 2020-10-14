<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Grupes;

class GrupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupes::truncate();

        Grupes::create(['Group_Name' => 'admin']);
        Grupes::create(['Group_Name' => 'author']);
        Grupes::create(['Group_Name' => 'user']);
    }
}
