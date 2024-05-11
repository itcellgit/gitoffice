<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class Deanadminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
            'email' => 'dean_admin@git.edu',
            'password' => Hash::make('Dean_admin'),
            'role' => UserRoles::Dean_admin->value,
            'status' => UserStatus::ACTIVE->value
        ],
        
        
        ]);
    }
}
