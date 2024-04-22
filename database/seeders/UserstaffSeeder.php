<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\UserRoles;
use App\Enums\UserStatus;
use DB;
use Illuminate\Support\Facades\Hash;

class UserstaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'id'=> 567,
            'email' => 'jspatil@git.edu',
            'password' => Hash::make('password'),
            'role' => UserRoles::NONTEACHING->value,
            'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 569,
                'email' => 'saanandache@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 573,
                'email' => 'vpnaik@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 575,
                'email' => 'skpatil@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 574,
                'email' => 'tanemannavar@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 571,
                'email' => 'svkolli@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 568,
                'email' => 'snbanoshi@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 576,
                'email' => 'cdkulkarni@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 565,
                'email' => 'pskargi@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 566,
                'email' => 'ssjeevannavar@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
            [
                'id'=> 503,
                'email' => 'sbmadiwalar@git.edu',
                'password' => Hash::make('password'),
                'role' => UserRoles::NONTEACHING->value,
                'status' => UserStatus::ACTIVE->value
            ],
        ]);
    }
}
