<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'Admin',
                'nama' => 'Admin',
                'password' => Hash::make('12345'),
                'roles_id' => 1
            ],
            [
                'username' => 'Dekan',
                'nama' => 'Dekan',
                'password' => Hash::make('12345'),
                'roles_id' => 2
            ],
            [
                'username' => 'Prodi',
                'nama' => 'Prodi',
                'password' => Hash::make('12345'),
                'roles_id' => 3
            ],
            [
                'username' => 'Alumni',
                'nama' => 'Alumni',
                'password' => Hash::make('12345'),
                'roles_id' => 4
            ],
            [
                'username' => 'Mahasiswa',
                'nama' => 'Mahasiswa',
                'password' => Hash::make('12345'),
                'roles_id' => 5
            ]
        ];

        foreach ($users as $key => $user){
            User::create($user);
        }
    }
}
