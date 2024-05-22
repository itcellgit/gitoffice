<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class PrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
            'email' => 'principal@git.edu',
            'password' => Hash::make('Principal@123'),
            'role' => UserRoles::PRINCIPAL->value,
            'status' => UserStatus::ACTIVE->value
            ],
        ]);
    }
}
