<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Groups;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Groups::truncate();

        Groups::create(['Group_Name' => 'admin']);
        Groups::create(['Group_Name' => 'author']);
        Groups::create(['Group_Name' => 'user']);

    }
}
