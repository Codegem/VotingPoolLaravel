<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Groups;
use Illuminate\Support\Facades\DB;
// naudojamas passwordam uzhashint
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     User::truncate();
     DB::table('groups')->truncate();

     $adminGroup = Groups::where('Group_Name', 'admin')->first();
     $authorGroup = Groups::where('Group_Name', 'author')->first();
     $userGroup = Groups::where('Group_Name', 'user')->first();

     $admin = User::create([
         'name' => 'Admin User',
         'email' => 'admin@admin.com',
         'password' => Hash::make('adminas123')
     ]);

     $author = User::create([
        'name' => 'Author User',
        'email' => 'author@author.com',
        'password' => Hash::make('password')
    ]);

    $user = User::create([
         'name' => 'Paprastas User',
         'email' => 'user@user.com',
         'password' => Hash::make('password')
     ]);

    $admin->groups()->attach($adminGroup);
    $author->groups()->attach($authorGroup);
    $user->groups()->attach($userGroup);

    }
}
