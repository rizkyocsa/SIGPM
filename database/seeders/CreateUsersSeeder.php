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
                'nama' => 'GPM',
                'email' => 'gpm@gmail.com',
                'id_role' => 1,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
            [
                'nama' => 'Dekan',
                'email' => 'dekan@gmail.com',
                'id_role' => 2,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
            [
                'nama' => 'Produ',
                'email' => 'prodi@gmail.com',
                'id_role' => 3,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
            [
                'nama' => 'Alumni',
                'email' => 'alumni@gmail.com',
                'id_role' => 4,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ],
            [
                'nama' => 'User',
                'email' => 'user@gmail.com',
                'id_role' => 5,
                'noHP' => '089655313595',
                'password' => Hash::make('12345')
            ]
        ];

        foreach ($users as $key => $user){
            User::create($user);
        }
    }
}
