<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use Illuminate\Support\Facades\Hash;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
            'email' => 'transportation@git.edu',
            'password' => Hash::make('Transport@123'),
            'role' => UserRoles::HOD->value,
            'status' => UserStatus::ACTIVE->value
            ],
            [
                'email' => 'language@git.edu',
                'password' => Hash::make('Language@123'),
                'role' => UserRoles::HOD->value,
                'status' => UserStatus::ACTIVE->value
                ],
        ]);
    }
}
